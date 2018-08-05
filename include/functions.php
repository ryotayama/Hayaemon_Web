<?php
$GLOBALS['debug'] = FALSE;
if ($GLOBALS['debug']) {
    ini_set("display_errors", "true");
    error_reporting(-1);
} else {
    ini_set("display_errors", "false");
    error_reporting(0);
}
/**
 * @return string HTML
 */
function GetCalener()
{
    $cal = NULL;
    $cal_html = NULL;
    foreach (glob('./history/history_*.txt') as $file) {
        if ($GLOBALS['debug']) {
            var_dump($file);
        }
        $cal .= file_get_contents($file);
    }
    $cal = str_replace(array("\r\n", "\r", "\n"), "\n", $cal);
    $cal = explode("\n", $cal);
    if ($GLOBALS['debug']) {
        var_dump($cal);
    }
    $cal = preg_grep('/^#.+$/', $cal);
    foreach ($cal as $line) {
        $line = str_replace('# ', '', $line);
        $line = explode("\t", $line);
        $cal_array[date("Y", strtotime($line[0]))][] = date("n", strtotime($line[0]));
    }
    if ($GLOBALS['debug']) {
        var_dump($cal_array);
    }
    unset($cal);
    foreach ($cal_array as $key => $value) {
        $cal_array[$key] = array_unique($value);
    }
    if ($GLOBALS['debug']) {
        var_dump($cal_array);
    }

    for ($i = 2005; $i <= date('Y'); $i++) {
        $cal_html .= "<div> ${i} 年 [";
        for ($m = 1; $m <= 12; $m++) {
            if (array_search($m, $cal_array[$i]) !== FALSE && !empty($cal_array[$i])) {
                $cal_html .= " <a href='./history.php?date=${i}${m}'>${m}</a>";
            } else {
                $cal_html .= " <span class='cal disable'>${m}</span>";
            }
        }
        $cal_html .= " ]</div>";
    }
    return $cal_html;
}

/**
 * @param string $date
 * @return string HTML
 */
function GetHistory($date = 'latest')
{
    if (!is_numeric($date) || empty($date)) {
        $date = 'latest';
    }
    if ($date == 'latest') {
        $date_mon = date("m");
        $date_year = date("Y");
    } elseif (is_numeric($date)) {
        $date = substr_replace($date, '/', 4, 0);
        $date .= '/01';
        $date_mon = date("m", strtotime($date));
        $date_year = date("Y", strtotime($date));

    } else {
        trigger_error("ERROR:Invalid argument", E_USER_ERROR);
    }
    $flag = TRUE;
    $count = 1;
    $html = NULL;
    $history = htmlspecialchars(file_get_contents("./history/history_${date_year}.txt"), ENT_HTML5);
    if (empty($history)) {
        $html = "<div class='history'>指定された期間のアップデートログは見つかりませんでした</div>";
    }

    $history = str_replace(array("\r\n", "\r", "\n"), "\n", $history);
    $history = explode("\n\n", $history);


    foreach ($history as $value) {
        if ($flag) {
            $html .= "<div class='history'>";
        }
        $content = explode("\n", $value);
        if ($date == 'latest') {
            if ($count <= 5) {
                foreach ($content as $version_detail) {
                    $data = getMd($version_detail, 'any', 'any', $flag);
                    $html .= $data[0];
                    $flag = $data[1];
                }
                $count++;
            }
        } else {
            foreach ($content as $version_detail) {
                $data = getMd($version_detail, $date_year, $date_mon, $flag);
                $html .= $data[0];
                $flag = $data[1];

            }
        }
        if ($GLOBALS['debug']) {
            var_dump($value);
        }
        if ($flag) {
            $html .= "</div>";
        }
    }
    if ($GLOBALS['debug']) {
        var_dump($html);
    }
    if ($html == "<div class='history'>") {
        $html = "<div class='history'>指定された期間のアップデートログは見つかりませんでした</div>";
    }
    $html = str_replace('<div class=\'history\'></div>', '', $html);
    if ($GLOBALS['debug']) {
        var_dump($html);
    }
    return $html;
}

/**
 * @param      $content
 * @param      $year
 * @param      $mon
 * @param bool $flag
 * @return array
 */
function GetMd($content, $year, $mon, $flag = FALSE)
{
    $return = NULL;
    if ($GLOBALS['debug']) {
        var_dump($content);
    }
    switch ($content[0]) {
        case '-':
            break;
        case '#':
            $str = str_replace('# ', '', $content);
            $str_split = explode("\t", $str);
            $release_timing = date("Y/m/d", strtotime($str_split[0]));
            $date = explode('/', $release_timing);
            if ($date[1] == $mon || $mon == 'any') {
                $flag = TRUE;
            } else {
                $flag = FALSE;
            }
            if ($flag == TRUE) {
                $return .= " <h3>${release_timing} ${str_split[1]} </h3> ";
            }
            break;
        case '*':
            if ($flag == TRUE) {
                $return .= "<li> " . str_replace('* ', '', $content) . "</li> ";
                $return = SearchLink($return);
            }
            break;
        case '$':
            if ($flag == TRUE) {
                $str = str_replace('$ ', '', $content);
                $return .= "<a href = '${str}' class='downloadlink'> このバージョンをダウンロード</a> ";
            }
            break;
    }
    return array($return, $flag);
}

/**
 * @param $str
 * @return null|string|string[]
 */
function SearchLink($str)
{
    $atag = preg_replace("/\((.+)\)\[(.+)\]/", "<a href='$2' class='history alternate'>$1</a>", $str);
    if (empty($atag)) {
        $atag = $str;
    }
    if ($GLOBALS['debug']) {
        var_dump($atag);
    }
    return $atag;
}
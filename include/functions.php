<?php
/**
 * カレンダーを作成します
 * 引数とかは特にありません
 *
 * @return string HTML
 */

function GetCalender()
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
        if (!empty($cal_array[$i])) {
            $cal_html .= "<div> ${i} 年 [";
            for ($m = 1; $m <= 12; $m++) {
                $mp = str_pad($m, 2, 0, STR_PAD_LEFT);
                if (array_search($m, $cal_array[$i]) !== FALSE) {
                    $cal_html .= " <a href='{$GLOBALS['o']['Url']}/history.php?date=${i}${mp}'>${mp}</a>";
                } else {
                    $cal_html .= " <span class='cal disable'>${mp}</span>";
                }
            }
            $cal_html .= " ]</div>";
        }
    }
    return $cal_html;
}

/**
 * 指定された期間の更新ログを解析しHTMLに整形して戻す
 * 期間指定が無い場合は最新5件を返す
 *
 * @param string $date "YYYYmm"形式で データを渡すと指定時期の更新ログを表示します
 * @return string HTML
 * @todo 綺麗なコードにしないとやばい
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
    $flag = $html = $history = TRUE;
    $count = 1;
    if ($date == 'latest') {
        while (mb_substr_count($history, '#') <= 5) {
            $history .= htmlspecialchars(file_get_contents("./history/history_${date_year}.txt"), ENT_HTML5);
            $date_year--;

        }
    }else{
        $history .= htmlspecialchars(file_get_contents("./history/history_${date_year}.txt"), ENT_HTML5);
    }

/*    if (empty($history)) {
        $html = "<div class='history'>指定された期間のアップデートログは見つかりませんでした</div>";
    }*/

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
 * 入力されたMarkdown 互換のデータをHTMLに整形します
 *
 * @access     private
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
                $return .= "<a href = '{$GLOBALS['o']['Url']}${str}' class='downloadlink'> このバージョンをダウンロード</a> ";
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
    $atag = preg_replace("/\((.+)\)\[(.+)\]/", "<a href='{$GLOBALS['o']['Url']}/$2' class='history alternate'>$1</a>", $str);
    if (empty($atag)) {
        $atag = $str;
    }
    if ($GLOBALS['debug']) {
        var_dump($atag);
    }
    return $atag;
}
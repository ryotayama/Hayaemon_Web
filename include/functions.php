<?php
$GLOBALS['debug'] = FALSE;
if ($GLOBALS['debug']) {
    ini_set("display_errors", "true");
    error_reporting(-1);
} else {
    ini_set("display_errors", "false");
    error_reporting(0);
}
function GetCalener()
{
    $document = <<<EOL
<div class="entry-body" >
            <div>2012 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            <div>2011 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            <div>2010 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            <div>2009 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            <div>2008 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            <div>2007 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            <div>2006 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            <div>2005 年 [ 01 02 03 04 05 06 07 08 09 10 11 12 ]</div>
            
</div><!-- /entry-body -->
EOL;
    return $document;
}

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
    $count = 0;
    $html = NULL;
    $history = file_get_contents("./history/history_${date_year}.txt");
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
    if ($html == "<div class='history'></div><div class='history'>") {
        $html = "<div class='history'>指定された期間のアップデートログは見つかりませんでした</div>";
    }
    $html = str_replace('<div class=\'history\'></div>', '', $html);
    return $html;
}

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
            $release_timing = date("Y / m / d", strtotime($str_split[0]));
            $date = explode('/', $release_timing);
            if ($date[1] == $mon || $mon == 'any') {
                $flag = TRUE;
            } else {
                $flag = FALSE;
            }
            if ($flag == TRUE) {
                $return .= " < h3>${release_timing} ${str_split[1]} </h3 > ";
            }
            break;
        case '*':
            if ($flag == TRUE) {
                $return .= "<li > " . str_replace('* ', '', $content) . "</li > ";
            }
            break;
        case '$':
            if ($flag == TRUE) {
                $str = str_replace('$ ', '', $content);
                $return .= "<a href = '${str}' class='downloadlink' > このバージョンをダウンロード</a > ";
            }
            break;
    }
    return array($return, $flag);
}
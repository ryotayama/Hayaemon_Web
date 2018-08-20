<?php
/**
 * カレンダーを作成します
 * 引数とかは特にありません
 *
 * @return string HTML
 */

function GetCalender () {
	$cal = NULL;
	$cal_html = NULL;
	foreach (glob('./history/history_*.txt') as $file) {
		if($GLOBALS['debug']) {
			var_dump($file);
		}
		$cal .= file_get_contents($file);
	}
	$cal = str_replace(array("\r\n", "\r", "\n"), "\n", $cal);
	$cal = explode("\n", $cal);
	if($GLOBALS['debug']) {
		var_dump($cal);
	}
	$cal = preg_grep('/^#.+$/', $cal);
	foreach ($cal as $line) {
		$line = str_replace('# ', '', $line);
		$line = explode("\t", $line);
		$cal_array[date("Y", strtotime($line[0]))][] = date("n", strtotime($line[0]));
	}
	if($GLOBALS['debug']) {
		var_dump($cal_array);
	}
	unset($cal);
	foreach ($cal_array as $key => $value) {
		$cal_array[$key] = array_unique($value);
	}
	if($GLOBALS['debug']) {
		var_dump($cal_array);
	}
	for ($i = 2005; $i <= date('Y'); $i++) {
		if(!empty($cal_array[$i])) {
			$cal_html .= "<div> <a href='{$GLOBALS['o']['Url']}/history.php?date=${i}'>${i}</a> 年 [";
			for ($m = 1; $m <= 12; $m++) {
				$mp = str_pad($m, 2, 0, STR_PAD_LEFT);
				if(array_search($m, $cal_array[$i]) !== FALSE) {
					$cal_html .= " <a href='{$GLOBALS['o']['Url']}/history.php?date=${i}${mp}'>${mp}</a>";
				} else {
					$cal_html .= " <span class='cal disable'>${mp}</span>";
				}
			}
			$cal_html .= " ]</div>\n";
		}
	}
	return $cal_html;
}

/**
 * 指定された期間の更新ログを解析しHTMLに整形して戻す
 * 期間指定が無い場合は最新5件を返す
 *
 * @param string [$date='latest'] "YYYYmm"形式で データを渡すと指定時期の更新ログを表示します
 * @return string HTML
 */
function GetHistory ($date = 'latest') {
	//setup
	if(!is_numeric($date) || empty($date)) {
		$date = 'latest';
	}
	if($date == 'latest') {
		$date_mon = date("m");
		$date_year = date("Y");
	} elseif(is_numeric($date)) {
		$date = substr_replace($date, '/', 4, 0);
		$date .= '/01';
		if(preg_match('/\d{4}\/\/01/', $date)) {
			$date_mon = 'any';
			$date_year = substr($date, 0, 4);
		} else {
			$date_mon = date("m", strtotime($date));
			$date_year = date("Y", strtotime($date));
		}
	} else {
		trigger_error("ERROR:Invalid argument", E_USER_ERROR);
	}
	//init
	$html = $history = NULL;
	$count = 1;
	//get history
	$history = getHistoryFile($date_year, $date);
	//build history data
	foreach ($history as $value) {
		if($date == 'latest') {
			if($count <= 5) {
				$html .= getHistoryItem2html($value);
				$count++;
			}else{
				break(1);
			}
		} else {
			$html .= getHistoryItem2html($value, $date_mon);
		}
	}
	if(empty($html)) {
		$html = '<div class=\'history\'>指定された期間のアップデートログは見つかりませんでした</div>';
	}
	return $html;
}

/**
 * Version Summary 2 html
 *
 * @param string $history
 * @param integer|string [$month='any']
 *
 * @return null|string
 */
function getHistoryItem2html ($history, $month = 'any') {
	$content = explode("\n", $history);
	if($month == 'any' || preg_match("/# \d{4}\/${month}\//", $content[0])) {
		$html = '<div class="history">';
		foreach ($content as $version_detail) {
			$html .= getMd($version_detail);
		}
		$html .= '</div>';
	}
	if($html == '<div class="history"></div>') {
		$html = NULL;
	}
	return $html;
}


/**
 * Get History File Item 2 array
 *
 * @param int $period year
 * @param int [$limit=5]
 *
 * @return array history[version]
 */
function getHistoryFile ($period, $is_latest = FALSE, $limit = 5) {
	//init
	$history = NULL;

	if($is_latest == 'latest') {
		while (mb_substr_count($history, '#') <= $limit) {
			$history .= htmlspecialchars(file_get_contents("./history/history_${period}.txt"), ENT_HTML5);
			$period--;
		}
	} else {
		$history .= htmlspecialchars(file_get_contents("./history/history_${period}.txt"), ENT_HTML5);
	}
	$history = str_replace(array("\r\n", "\r", "\n"), "\n", $history);
	$history = explode("\n\n", $history);

	return $history;
}

/**
 * 入力されたMarkdown 互換のデータをHTMLに整形します
 *
 * @param string $content Markdown
 *
 * @return string html
 */
function GetMd ($content) {
	$return = NULL;
	switch ($content[0]) {
		case '-':
			break;
		case '#':
			$str = str_replace('# ', '', $content);
			$str_split = explode("\t", $str);
			$release_timing = date("Y/m/d", strtotime($str_split[0]));
			//$date = explode('/', $release_timing);
			$return .= " <h3>${release_timing} ${str_split[1]} </h3> ";
			break;
		case '*':
			$return .= "<li> " . str_replace('* ', '', $content) . "</li> ";
			$return = SearchLink($return);
			break;
		case '$':
			$str = str_replace('$ ', '', $content);
			$return .= "<a href='{$GLOBALS['o']['Url']}${str}' class='downloadlink'> このバージョンをダウンロード</a> ";
			break;
	}
	return $return;
}

/**
 * SearchHyperLink
 *
 * @param string $str Search Text
 *
 * @return string html or plain
 */
function SearchLink ($str) {
	$matches = null;
	if(preg_match("/(.+)\((.+)\)\[(.+)\](.+)/",$str, $matches) === 0) {
		$atag = $str;
	}else{
		if(preg_match('/^(http|https):\/\/([\w-]+\.)+[\w-]+(\/[\w-.\/?%&=]*)?$/',$matches[3]) === 0) {
			$atag = "${matches[1]}<a href='{$GLOBALS['o']['Url']}${matches[3]}' class='history alternate'>${matches[2]}</a>${matches[4]}";
		}else{
			$atag = "${matches[1]}<a href='${matches[3]}' class='history alternate'>${matches[2]}</a>${matches[4]}";
		}
	}
	if($GLOBALS['debug']) {
		var_dump($atag);
	}
	return $atag;
}
<?php
/**
 * Created by PhpStorm.
 * User: ryutaro
 * Date: 2018/08/03
 * Time: 23:31
 */

/* General Settings */
// Debugはサイト全体をデバッグモードをに設定するかを選択できます
// TRUEに設定すると変数のダンプが有効になり、コードを編集する事無くデバッグができます
// default: TRUE
// recommend: FALSE
$set['Debug'] = TRUE;

// GlobalTitleはサイト全域で利用されるタイトルで全てのページのタイトルの右側に表示されます
// context:<title>PageTitle | {GlobalTitle}</title>
// default: 聞々ハヤえもん公式サイト
// recommend: 聞々ハヤえもん公式サイト
$set['GlobalTitle'] = '聞々ハヤえもん公式サイト';

// Descriptionはサイトの説明文ですOpen Graph Protocol等で利用されます
// context:<meta property="og:description" content="{Description}"/>
// default: 再生速度、周波数、音程を変更できる、耳コピ、カラオケ／楽器／ダンス／英語のリスニング練習、テープ起こし等に便利なMP3プレーヤとして公開中のオープンソースのフリーソフト
// recommend: 再生速度、周波数、音程を変更できる、耳コピ、カラオケ／楽器／ダンス／英語のリスニング練習、テープ起こし等に便利なMP3プレーヤーとして公開中のオープンソースのフリーソフト
$set['Description'] = "再生速度、周波数、音程を変更できる、耳コピ、カラオケ／楽器／ダンス／英語のリスニング練習、テープ起こし等に便利なMP3プレーヤとして公開中のオープンソースのフリーソフト";

// Protocolはウェブサイトへの接続プロトコルを指定します
// 内部リンク等様々な場所で使われます
// context:{Protocol}://hayaemon.jp
// default: https
// recommend: https
$set['Protocol'] = 'http';

// Domainは運用ドメインを指定します
// 内部リンク等様々な場所で使われます
// context:https://{Domain}
// default: hayaemon.jp
// recommend: hayaemon.jp
$set['Domain'] = 'hayaemon.jp';

// Directoryはサブディレクトリ以下で動作している場合に必要です
// ルートディレクトリで動作する場合には設置は不要です
// 最後にスラッシュが必要です
// この機能はWIPです
// context:https://hayaemon.jp/{Directory}
// default: /
// recommend: /
$set['Directory'] = '';

// AnalyticsIdはGoogle Analyticsとの連携に使われます
// context:gtag('config', '{AnalyticsId}');
// default: UA-*********-*
// recommend: Your Analytics ID
$set['AnalyticsId'] = 'UA-122337233-1';

// AdwordsIdはGoogle adword及びDouble ClickまたはGoogle Ads及びGoogle Marketing Platformとの連携に使われます
// context:gtag('config', '{AdwordsId}');
// default: AW-*********-*
// recommend: Your Adwords ID
$set['AdwordsId'] = 'AW-*********-*';


// DO NOT EDIT
$o = $set;
$o['Url'] = "${set['Protocol']}://${set['Domain']}${set['Directory']}";
unset($set);

$GLOBALS['debug'] = $o['Debug'];
if ($GLOBALS['debug']) {
    ini_set("display_errors", "true");
    error_reporting(-1);
} else {
    ini_set("display_errors", "false");
    error_reporting(0);
}
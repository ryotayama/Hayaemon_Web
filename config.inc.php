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
$set['Debug'] = false;

// [WIP]
// is_Securityは本モジュールが読み込まれているページ全体を通してセキュリティー機構を有効にするか選択できます
// いくつか機能や、技術は正しく動作しなくなる可能性がありますので、十分確認の上設定して下さい
// default: TRUE
// recommend: TRUE
$set['is_Security'] = TRUE;

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
$set['Domain'] = '192.168.0.109';

// Directoryはサブディレクトリ以下で動作している場合に必要です
// ルートディレクトリで動作する場合には設置は不要です
// 最後のスラッシュは不要ですが最初のスラッシュが必要です
// この機能はWIPです
// context:https://hayaemon.jp{Directory}/
// default: /
// recommend: /
$set['Directory'] = '/hayaemon';

// AnalyticsIdはGoogle Analyticsとの連携に使われます
// context:gtag('config', '{AnalyticsId}');
// default: UA-*********-*
// recommend: Your Analytics ID
$set['AnalyticsId'] = 'UA-*********-*';

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
if ($o['is_Security']) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 1);
    header("Cache-Control: no-cache");
    header("Content-Security-Policy: default-src 'self' *.googlesyndication.com;".
        "script-src 'self' 'unsafe-inline' static.ak.fbcdn.net b.st-hatena.com www.googletagmanager.com code.jquery.com cdnjs.cloudflare.com connect.facebook.net platform.twitter.com *.amazon.co.jp ".
            "www.googletagservices.com  www.google-analytics.com www.googleadservices.com *.google.co.jp *.google.com *.doubleclick.net *.googlesyndication.com;".
        "img-src 'self' data: b.st-hatena.com nabettu.github.io cdnjs.cloudflare.com *.linksynergy.com *.google.co.jp *.google.com *.assoc-amazon.jp *.amazon-adsystem.com *.gstatic.com;".
        "style-src 'self' 'unsafe-inline' cdnjs.cloudflare.com use.fontawesome.com;".
        "font-src use.fontawesome.com;".
        "frame-src www.youtube.com apis.google.com platform.twitter.com accounts.google.com cdn.api.b.hatena.ne.jp staticxx.facebook.com syndication.twitter.com www.facebook.com amazon-adsystem.com *.assoc-amazon.jp *.doubleclick.net;".
        "connect-src *.doubleclick.net *.googlesyndication.com;".
        "prefetch-src *.googlesyndication.com;");
    header('Access-Control-Allow-Origin: *');
    header("X-XSS-Protection: 1; mode=block");
    header("X-Content-Type-Options: nosniff");
    header("X-Download-Options: noopen");
    header("X-Frame-Options: DENY");
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
    header("Server: HTTP Server");
    header_remove("X-Powered-By");
}
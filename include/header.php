<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $o['Url']; ?>/style.css">
    <?php include(dirname(__FILE__) . '/ga.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="description" content="<?php echo $o['Description']; ?>">
    <meta name="keywords" content="聞々ハヤえもん,はやえもん,ハヤエモン,hayaemon,MP3プレーヤ,オープンソース,テープ起こし,書き起こし,耳コピ,カラオケ">
    <link rel="stylesheet" href="<?php echo $o['Url']; ?>/styles-site.css" type="text/css">
    <link rel="index" href="<?php echo $o['Url']; ?>">
    <link rev="made" href="mailto:ryota.yamauch@gmail.com">
    <link rel="icon" href="<?php echo $o['Url']; ?>/favicon.ico" type="image/vnd.microsoft.icon"/>
    <meta property="og:title" content="<?php echo $o['PageTitle']; ?>"/>
    <meta property="og:site_name" content="<?php echo $o['GlobalTitle']; ?>"/>
    <meta property="og:description" content="<?php echo $o['Description']; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $o['Url']; ?>/about.html"/>
    <meta property="og:image" content="<?php echo $o['Url']; ?>/icon.png"/>
    <title><?php echo $o['PageTitle']; ?> | <?php echo $o['GlobalTitle']; ?></title>
</head>
<body class="layout-<?php echo $o['column']; ?>-column">
<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");
</script>
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<div id="box">
    <div id="banner">
        <a href="<?php echo $o['Url']; ?>">
            <img src="<?php echo $o['Url']; ?>/80.png" align=left alt="アイコン" width=80 height=80 style="margin-right:10px"/>
            MP3プレイヤー フリーソフト<br/>
            <h1>
                <span class="font13">ぶ ん ぶ ん</span><br/>
                <?php echo $o['GlobalTitle']; ?>
            </h1>
        </a>
    </div>
<?php
if ($o['type'] == 'manual') {
    include(dirname(__FILE__) . '/manual_header.php');
}
?>
<?php
// todo : パンクズリストが二つ以上の長さを持つ事を考慮してない
$callFile = basename(debug_backtrace($limit = 2)[0]['file']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html lang="ja">
    <head>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script async src="https://b.st-hatena.com/js/bookmark_button.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js" integrity="sha384-jMjIgt4QdA1WrA0unG7/GNeNM9zeGeaOReuG/uSElOfCEqYxDuvSqzMpNfcwz8aI" crossorigin="anonymous"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta name="description" content="<?php echo $o['Description']; ?>">
        <meta name="keywords" content="聞々ハヤえもん,はやえもん,ハヤエモン,hayaemon,MP3プレーヤ,オープンソース,テープ起こし,書き起こし,耳コピ,カラオケ">
        <meta property="og:title" content="<?php echo $o['PageTitle']; ?>"/>
        <meta property="og:site_name" content="<?php echo $o['GlobalTitle']; ?>"/>
        <meta property="og:description" content="<?php echo $o['Description']; ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="<?php echo $o['Url']; ?>/<?php echo $callFile; ?>"/>
        <meta property="og:image" content="<?php echo $o['Url']; ?>/img/header1080.png"/>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@ryota_yama">
        <meta name="twitter:creator" content="@ryota_yama">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" integrity="sha384-mnWS6DJx6vyJAb7LXaJbmCkyINB2DDFohOPy28Nxh31ZJc76e7LWvvj6gQa/mCZW" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $o['Url']; ?>/styles-site.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo $o['Url']; ?>/style.css">
        <link rel="index" href="<?php echo $o['Url']; ?>">
        <link rev="made" href="mailto:ryota.yamauch@gmail.com">
        <link rel="icon" href="<?php echo $o['Url']; ?>/favicon.ico" type="image/vnd.microsoft.icon"/>
        <?php include(dirname(__FILE__) . '/ga.php'); ?>
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
        <script type="text/javascript">
            window.___gcfg = {lang: 'ja'};

            (function () {
                var po = document.createElement('script');
                po.type = 'text/javascript';
                po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(po, s);
            })();
        </script>
        <title><?php echo $o['PageTitle']; ?> | <?php echo $o['GlobalTitle']; ?></title>
    </head>
<?php if ($o['type'] == 'index'){ ?>
<body class="layout-two-column-right">
<?php }else{ ?>
<body class="layout-<?php echo $o['column']; ?>-column">
<?php } ?>
    <div id="fb-root"></div>
<div id="box">
<?php if ($o['type'] == 'index') { ?>
    <div style="float:left">
<?php } ?>
    <div id="banner">
        <a href="<?php echo $o['Url']; ?>">
            <img src="<?php echo $o['Url']; ?>/img/80.png" align=left alt="アイコン" width=80 height=80 style="margin-right:10px"/>
            MP3プレイヤー フリーソフト<br>
            <h1>
                <?php echo $o['HeaderTitle']; ?>
            </h1>
        </a>
    </div>
<?php if ($o['type'] == 'index') { ?>
    </div>
<?php } ?>
<?php
if ($o['type'] == 'manual') {
    include(dirname(__FILE__) . '/manual_header.php');
}
?>
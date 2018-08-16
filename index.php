<?php
$set['PageTitle'] = 'トップページ';
$set['column'] = 'one';
$set['type'] = 'index';
include('config.inc.php');

include('./include/functions.php');
include('./include/header.php');

?>
<style type="text/css">
    <!--
    #appreach-box {
        border                : 1px solid #ddd; /* 枠線の太さと色 */
        margin                : 1em 1em 2em 1em; /* 枠線の外側の余白 */
        background-color      : #fff; /* 背景色変更はここ */
        padding               : 10px 10px 0 10px; /* 枠線内の余白（任意で） */
        border-radius         : 10px; /* 角を丸く */
        -webkit-border-radius : 10px; /* Safari,Google Chrome用 */
        -moz-border-radius    : 10px;
    }

    #appreach-box p {
        display : none;
    }

    #appreach-itunes-link {
        margin-right : 10px; /* ボタン間の余白（任意で） */
    }

    #appreach-appname {
        color : #333; /* アプリ名の部分の文字色 */
    }

    #appreach-developer {
        color : #333; /* 開発元の部分の文字色 */
    }

    div#appreach-price {
        color : #333; /* 価格の部分の文字色 */
    }

    #appreach-developerurl {
        color : #0066cc; /* 開発元リンク部分の色 */
    }

    .appreach-powered a {
        color : #0066cc !important; /* アプリーチリンク部分の色 */
    }

    -->
</style>

<div style="float:right;font-size:24px;margin-right:36px">
    <br/>
    日本語 | <a href="http://en.edolfzoku.com/hayaemon2/" style="text-decoration:underline">English</a>
</div>
<!-- 中央カラム開始 -->
<div id="content">
    <div class="blog">
        <div class="entry">

            <!-- begin PhpMyBorder -->
            <div style="width: 740px;">
                <b style="font-size:1px;display:block; overflow:hidden;">
                    <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                    <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                    <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                    <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                </b>
                <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                    <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                    <div style="margin:10px 0px 10px 5px; line-height: 120%">
                        <!-- How_Index_Top_728x90 -->
                        <div id='div-gpt-ad-1355537191471-2' style='width:728px; height:90px;'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function () {
                                    googletag.display('div-gpt-ad-1355537191471-2');
                                });
                            </script>
                        </div>
                        <br/>
                        <div style="text-align:center;vertical-align: top; padding:1em 0;">
                            <a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none"/></a>　
                            <div class="fb-like" data-send="false" data-layout="button_count" data-width="450"
                                 data-show-faces="true"
                                 style="display: inline-block; _display: inline;vertical-align: top"></div>
                            　<a href="https://twitter.com/share" class="twitter-share-button" data-via="ryota_yama"
                                data-lang="ja"></a>
                            <div style="display: inline-block; _display: inline;vertical-align: top;width:70px !important">
                                <g:plusone size="medium"></g:plusone>
                            </div>
                        </div>

                        <div style="text-align:center;">
                            <div style="color:red; font-size:18px; padding:1em 0 0 0; font-weight: bold;">
                                ＼スマートフォン版アプリ無料配信中！／
                            </div>
                            <!-- アプリーチ 開始 -->
                            <div id="appreach-box" style="text-align:left; display:inline-block; width:420px;">
                                <img id="appreach-image"
                                     src="//is3-ssl.mzstatic.com/image/thumb/Purple118/v4/86/5e/f3/865ef37c-5361-6673-8fc6-fc2421911366/source/512x512bb.jpg"
                                     alt="ハヤえもん"
                                     style="float:left; margin:10px; width:25%; max-width:120px; border-radius:20%;">
                                <div class="appreach-info"
                                     style="margin: 10px; font-size: 12px; line-height: 200%;">
                                    <div id="appreach-appname"
                                         style="font-size: 15px; font-weight: bold; line-height: 200%;">ハヤえもん -
                                        音楽プレイヤー
                                    </div>
                                    <div id="appreach-developer">
                                        開発元:<a id="appreach-developerurl"
                                               href="https://itunes.apple.com/jp/developer/ryota-yamauchi/id670687994?uo=4"
                                               target="_blank" rel="nofollow">Ryota Yamauchi</a>
                                        <span id="appreach-price">無料</span>
                                    </div>
                                    <div class="appreach-links" style="float: left; margin-top: 5px;">
                                        <div id="appreach-itunes-link"
                                             style="display: inline-block; _display: inline;">
                                            <a id="appreach-itunes"
                                               href="https://itunes.apple.com/jp/app/%E3%83%8F%E3%83%A4%E3%81%88%E3%82%82%E3%82%93/id717639970?mt=8&amp;uo=4&amp;at="
                                               target="_blank" rel="nofollow">
                                                <img src="https://nabettu.github.io/appreach/img/itune_ja.svg"
                                                     style="height:40px;width:135px;">
                                            </a>
                                        </div>
                                        <div id="appreach-gplay-link"
                                             style="display:inline-block; _display:inline;">
                                            <a id="appreach-gplay"
                                               href="https://play.google.com/store/apps/details?id=com.edolfzoku.hayaemon2"
                                               target="_blank" rel="nofollow">
                                                <img src="https://nabettu.github.io/appreach/img/gplay_ja.png"
                                                     style="height:40px;width:134.5px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="appreach-footer" style="margin-bottom:10px; clear: left;"></div>
                            </div>
                            <!-- アプリーチ 終了 -->
                        </div>
                        <!-- Windows版スクリーンショット -->
                        <div style="text-align:center;margin-top:20px">
                            <a href="images/hayaemonscreenshot2.jpg" rel="lightbox[top]"
                               title="聞々ハヤえもんのスクリーンショット"><img src="images/hayaemonscreenshot2_s.jpg" alt=""
                                                              width="320" height="240" border="0"
                                                              style="margin-bottom:10px"></a><a
                                    href="images/hayaemonscreenshot.jpg" rel="lightbox[top]"
                                    title="聞々ハヤえもんのスクリーンショット"><img src="images/hayaemonscreenshot_s.jpg" alt=""
                                                                   width="320" height="240" border="0"
                                                                   style="margin-left:20px;margin-bottom:10px"></a><a
                                    href="images/hayaemonscreenshot3.jpg" rel="lightbox[top]"
                                    title="聞々ハヤえもんのスクリーンショット"></a>
                        </div>
                        <!-- MacOS版スクリーンショット
                        <div style="text-align:center;margin-top:10px">
                        <a href="images/hayaemonscreenshot2.jpg" rel="lightbox[top]" title="聞々ハヤえもんのスクリーンショット"><img src="images/hayaemonscreenshot2_s.jpg" width="320" height="240" border="0" style="margin-bottom:10px"></a><a href="images/hayaemonscreenshot.jpg" rel="lightbox[top]" title="聞々ハヤえもんのスクリーンショット"><img src="images/hayaemonscreenshot_s.jpg" width="320" height="240" border="0" style="margin-left:20px;margin-bottom:10px"></a><a href="images/hayaemonscreenshot3.jpg" rel="lightbox[top]" title="聞々ハヤえもんのスクリーンショット"></a>
                        </div> -->
                        <div style="text-align:center; font-size:26px; padding:1.5em 0 .2em 0;">音楽を、もっと楽しく！！</div>
                        <div style="font-size:13px; padding:1em 3em 2em 2em; line-height: 120%;">
                            <div style="margin:1em;padding-left:1em">音楽<span style="letter-spacing:-2px">――</span>&nbsp;。それは、音を楽しむこと。<br/>
                            </div>
                            <div style="margin:1em;padding-left:2em">
                                近年、音楽の大量消費化が進み、次々と新しい音楽が生み出されては、たちまち消えていってしまうような世の中になりました。<br/></div>
                            <div style="margin:1em;padding-left:3em">しかし、音楽の本質が変わることはありません。<br/></div>
                            <div style="margin:1em;padding-left:4em">音楽<span style="letter-spacing:-2px">――</span>&nbsp;。それは、音を楽しむこと。<br/>
                            </div>
                            <div style="margin:1em;padding-left:1em">どうやって？<br/></div>
                            <div style="margin:1em;padding-left:2em">その答えを用意しました。<br/></div>
                            <div style="margin:1em;padding-left:3em">「聞々ハヤえもん」です。<br/></div>
                            <div style="margin:1em;padding-left:1em">
                                聞々ハヤえもんは、「音楽を、もっと楽しく！！」という目的のためだけに作られた世界でひとつだけのユニークなサウンドプレイヤーです。<br/></div>
                            <div style="margin:1em;padding-left:2em">さあ、聞々ハヤえもんをダウンロードしてみましょう。<br/></div>
                            <div style="margin:1em;padding-left:3em">あなたにとっての音楽が、今日から変わります。<br/></div>
                            <div style="margin:1em;text-align:right;font-weight:bold;font-size:13px;line-height:120%">
                                聞々ハヤえもん開発者<br/>
                                山内　良太<br/>
                            </div>
                            <div style="margin:1em;font-size:14px;text-align:center"><a href="about.php" class="btn">聞々ハヤえもんについてさらに詳しく</a></div>
                        </div>
                        <div style="width:340px;float:left;margin:0 0 0 1.5em;">
                            <br/>
                            <!-- Youtube -->
                            <iframe width="340" height="255"
                                    src="https://www.youtube.com/embed/3qg0-ZfTZAc?rel=0&wmode=transparent"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div style="float:right;margin:0 1.5em 0 0;">

                            <div style="text-align:center">
                                <!-- Windows版ダウンロードリンク -->
                                <div style="font-size:20px;font-weight:bold;margin-top:15px;margin-bottom:20px">
                                    Windows版ダウンロード
                                </div>
                                <div style="font-size:14px;margin:15px 0;">
                                    最新安定版：Version 2.76（2018/06/12）
                                </div>
                                <a onclick="window.location='thanks.html';" target="_blank"
                                   href="Hayaemon276.zip"><img src="download_windows_japanese.png" width="160"
                                                               top="70" style="margin:0"
                                                               alt="聞々ハヤえもんWindows日本語安定版を無料ダウンロード"></a> <a
                                        onclick="window.location='thanks.html';" target="_blank"
                                        href="Hayaemon276_en.zip"><img src="download_windows_english.png" width="160"
                                                                       top="70" style="margin:0"
                                                                       alt="聞々ハヤえもんWindows英語安定版を無料ダウンロード"></a><br/>
                                <br/>
                                WindowsXP対応版：
                                <a onclick="window.location='thanks.html';" target="_blank"
                                   href="Hayaemon276_XP.zip" class="btn">日本語</a>
                                <a onclick="window.location='thanks.html';" target="_blank"
                                   href="Hayaemon276_XP_en.zip" class="btn">English</a><br/>
                                <br/>
                                <div style="font-size:14px;margin:15px 0;">
                                    最新beta版：Version 2.77β3（2018/7/4）
                                </div>
                                <a onclick="window.location='thanks.html';" target="_blank"
                                   href="Hayaemon277b3.zip" class="btn">通常版</a>
                                <a onclick="window.location='thanks.html';" target="_blank"
                                   href="Hayaemon277b3_XP.zip" class="btn">XP対応版</a><br/>
                                <!-- MacOS版ダウンロードリンク -->
                                <div style="font-size:20px;font-weight:bold;margin-top:30px;margin-bottom:20px">
                                    MacOS版
                                    <small>[beta]</small>
                                    ダウンロード
                                </div>
                                <div style="font-size:14px;margin:15px 0;">
                                    最新beta版：Version 0.01β4（2018/07/11）
                                </div>
                                <a href="Hayaemon001b4.app.zip"><img src="download_macos.png" width="160" top="70"
                                                                     style="margin:0" alt="聞々ハヤえもんMacOS版を無料ダウンロード"></a><br/>
                                <br/>
                            </div>
                        </div>
                        <br clear="all"/><br/>
                        <!-- How_Index_Bottom_728x90 -->
                        <div id='div-gpt-ad-1355537191471-0' style='width:728px; height:90px;'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function () {
                                    googletag.display('div-gpt-ad-1355537191471-0');
                                });
                            </script>
                        </div>
                    </div>
                    <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                </div>
                <b style="font-size:1px;display:block; overflow:hidden;">
                    <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                    <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                    <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                    <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                </b>
            </div>
            <!-- end PhpMyBorder -->
            <br/>
            <div style="text-align:center">

                <!-- リンクバナー
                <a href="wiki/index.php" target="_blank"><img src="community.png" style="margin-right:20px" alt="聞々ハヤえもんユーザーコミュニティ"></a><a href="bosyu.php" target="_blank"><img src="bosyu.png" alt="協力者募集中！！"></a> -->
            </div>
            <div id="news">
                <h2>News</h2>
                <ul>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20130329_593795.html" target="_blank">音程を解析してピアノロール風に表示する機能が追加された「聞々ハヤえもん」v2.72</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20130212_587377.html" target="_blank">各種エフェクトのパラメーターを細かく設定可能になった「聞々ハヤえもん」v2.68</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20130117_582081.html" target="_blank">FLV動画に対応し、A-B間リピート機能の使い勝手も向上した「聞々ハヤえもん」v2.66</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20121217_579112.html" target="_blank">“エクスプローラ”ペインが追加されたメディアプレイヤー「聞々ハヤえもん」v2.62</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20121121_574477.html" target="_blank">再生速度や音程、エフェクトなどの設定を保存可能になった「聞々ハヤえもん」v2.60</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20121105_570950.html" target="_blank">音感とリズム感を破壊する“歌へた”モードを搭載した「聞々ハヤえもん」v2.58</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20120511_532137.html" target="_blank">動画再生に対応した“耳コピ”向けメディアプレイヤー「聞々ハヤえもん」v2.44</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20120216_512545.html" target="_blank">ノーマライズ機能が追加された“耳コピ”向けプレイヤー「聞々ハヤえもん」v2.40</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/docs/news/20110909_476049.html" target="_blank">再生速度を徐々に上げる機能を追加した耳コピ用プレイヤー「聞々ハヤえもん」v2.3</a></li>
                    <li>「Vector」にて紹介されました！<br/>
                        <a href="https://www.vector.co.jp/magazine/softnews/080223/n0802231.html" target="_blank">再生速度、周波数、音程を個別に変更することが可能なサウンドプレイヤー</a></li>
                    <li>「窓の杜」にて紹介されました！<br/>
                        <a href="https://www.forest.impress.co.jp/article/2006/04/04/hayaemon.html" target="_blank">再生速度と音程を個別変更できるWAVE/MP3/WMAプレイヤー「聞々ハヤえもん」</a></li>
                </ul>
            </div>
            <div id="history">
                <h2>更新履歴</h2>
                <br/>
                <?php echo GetHistory($date); ?>
                <div style="text-align:right"><a href="history.php" class="btn">さらに過去の更新履歴</a>
                </div>
            </div>
            <br clear="all">
            <!-- マニュアル動画　ここから -->
            <div style="font-size:24px;margin-left:10px;margin-top:30px;margin-bottom:10px;border-bottom:3px solid #c0c0c0;display: inline-block; _display: inline;width:320px">
                マニュアル動画公開中！！
            </div>
            <br/>
            <iframe width="730" height="545" src="https://www.youtube.com/embed/bvn-Vd095KA?rel=0&wmode=transparent"
                    frameborder="0" allowfullscreen></iframe>
            <div style="font-size:16px;margin-top:5px"><a href="manual.php" class="btn">マニュアル詳細</a>
            </div>
            <!-- マニュアル動画　ここまで -->
            <div class="entry-footer">
                Copyright &copy; 2004 - 2018 Ryota. All Rights Reserved.
            </div>
            <!-- /entry-footer -->
        </div><!-- /entry -->
        <div style="text-align:right"><a href="http://soft.edolfzoku.com/"><img
                        src="<?php echo $o['Url']; ?>/freesoft.png" alt="フリーソフト開発所" border=0></a>　<a href="<?php echo $o['Url']; ?>/"><img src="<?php echo $o['Url']; ?>/hayaemon-L.gif" alt="音楽を、もっと楽しく！！／聞々ハヤえもん公式サイト" border=0 width="200" height="40"></a>
        </div>
    </div><!-- /blog -->
</div><!-- /content -->
<!-- 中央カラム終了 -->
<!-- 右カラム開始 -->
<div id="links-right-box">
    <div id="links-right">
        <!-- How_Index_Right_336x280 -->
        <div id='div-gpt-ad-1355537191471-1' style='width:336px; height:280px;'>
            <script type='text/javascript'>
                googletag.cmd.push(function () {
                    googletag.display('div-gpt-ad-1355537191471-1');
                });
            </script>
        </div>
        <br/>
        <!-- メニューリンク ここから -->
        <div id="menu" style="width: 336px;">
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
            </b>
            <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                <div style="font-size:14px;padding-top:5px;padding-bottom:5px;font-weight:bold;padding-left:5px;border-bottom:1px solid #f0f0f0;text-align:center">
                    メニュー
                </div>
                <div style="font-size:14px;border-bottom:1px solid #f0f0f0"><a href="about.php" style="display:block;width:326px;padding:10px 10px 10px 15px">聞々ハヤえもんとは</a>
                </div>
                <div style="font-size:14px;border-bottom:1px solid #f0f0f0"><a href="environment.php" style="display:block;width:326px;padding:10px 10px 5px 15px">動作環境</a>
                </div>
                <div style="font-size:14px;border-bottom:1px solid #f0f0f0"><a href="manual.php" style="display:block;width:326px;padding:10px 10px 5px 15px">Windows版公式マニュアル</a>
                </div>
                <div style="font-size:14px;border-bottom:1px solid #f0f0f0"><a href="<?php echo $o['Url']; ?>/blog/" style="display:block;width:326px;padding:10px 10px 5px 15px">開発者ブログ</a>
                </div>
                <div style="font-size:14px"><a href="bosyu.php" style="display:block;width:326px;padding:10px 10px 5px 15px">協力者募集</a>
                </div>
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
            </div>
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
            </b>
        </div>
        <!-- メニューリンク ここまで -->
        <br/>
        <!-- ボーカルチェンジ　begin PhpMyBorder -->
        <div id="vocalChange" style="width: 336px;">
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
            </b>

            <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                <div style="font-size:14px;padding-top:5px;padding-bottom:5px;font-weight:bold;padding-left:5px;border-bottom:1px solid #f0f0f0;text-align:center">
                    ボーカルチェンジ
                </div>
                <div style="font-size:14px;border-bottom:1px solid #f0f0f0"><a href="morainaki.php" style="display:block;width:326px;padding:10px 10px 10px 15px">一青窈「もらい泣き」
                        ⇒ 平井堅</a></div>
                <div style="font-size:14px"><a href="heavyrotation.php" style="display:block;width:326px;padding:10px 10px 5px 15px">AKB48「ヘビーローテーション」
                        ⇒ TOKIO</a></div>
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
            </div>
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
            </b>
        </div>
        <!-- ボーカルチェンジ　end PhpMyBorder -->
        <br/>
        <!-- YOUTUBE　begin PhpMyBorder -->
        <div style="width: 336px;">
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
            </b>
            <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                <div style="font-size:14px;padding-top:5px;padding-bottom:5px;font-weight:bold;padding-left:5px;border-bottom:1px solid #f0f0f0;text-align:center">
                    ハヤえもんiOS版 公式PV
                </div>
                <div style="margin:10px;font-size:12px">
                    <a href="https://itunes.apple.com/jp/app/wen-hayaemon/id717639970?mt=8" style="font-weight:bold"
                       target="_blank">ハヤえもん iOS版</a>の公式プロモーションビデオが公開されました！<br/>
                    動画制作してくれた、でらくさん（<a href="https://twitter.com/dx_0913">@dx_0913</a>）、クレナさん（<a href="https://twitter.com/Narumi_KURENAI">@Narumi_KURENAI</a>）、ありがとうございます！٩( ᐛ )و
                </div>
                <iframe width="320" height="240" style="margin:7px"
                        src="https://www.youtube.com/embed/qWSnm7NfmBU?rel=0" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <iframe width="320" height="240" style="margin:7px"
                        src="https://www.youtube.com/embed/E-1fM1yJNIk?rel=0" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
            </div>
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
            </b>
        </div>
        <!-- YOUTUBE　end PhpMyBorder -->
        <br/>
        <!-- プロフィール　begin PhpMyBorder -->
        <div style="width: 336px;">
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
            </b>
            <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                <div style="margin:10px;font-size:12px">
                    <img src="face.png" width="63" height="73" align="left" style="margin-right:10px">
                    <div style="font-weight:bold;margin-bottom:5px">山内良太（りょーた）</div>
                    <div style="margin-bottom:5px">1982年10月28日 愛知県生まれ。</div>
                    大学時代、些細な出来事がきっかけで人間不信になり、孤独な日々を過ごしていたところ、大学のPCにソフトウェア開発環境がある事を知り、Windows用のソフトを作り始める。様々なソフトを開発していく中、自分に出来る事はこれしか無いと確信するに至り、2006年より愛知県でソフトウェア開発者として働き始める。2011年7月には職場で出会った同僚と結婚、2012年5月には長女、2014年7月には次女、2017年4月には長男が生まれる。ソフトウェア開発に対する情熱は冷める事なく、2018年5月にはついにソフトウェア開発者として独立、『聞々ハヤえもん』という無料音楽再生ソフト（Windows、iPhone、Android、Mac対応）を始めとする様々なソフトウェアの開発を行う日々を過ごしている。
                    <br/>
                    <br/>
                    <div style="margin-left:1em">
                        <a href="https://twitter.com/ryota_yama" class="twitter-follow-button"
                           data-show-count="false" data-lang="ja"
                           data-show-screen-name="true">@ryota_yamaさんをフォロー</a>
                        <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");</script>
                        <a href="mailto:Ryota.Yamauch@gmail.com"><img src="mail.png"></a>
                        <br/>
                        Mail:<a href="mailto:Ryota.Yamauch@gmail.com">Ryota.Yamauch@gmail.com</a><br/>
                        Twitter:<a href="https://twitter.com/ryota_yama" target="_blank">@ryota_yama</a><br/>
                        Google+:<a href="https://plus.google.com/102844305957143894856/posts"
                                   target="_blank">山内良太</a><br/>
                        YouTube:<a href="https://www.youtube.com/user/taroedolfzoku/" target="_blank">山内良太</a>
                    </div>
                </div>
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
            </div>
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
            </b>
        </div>
        <!-- プロフィール　end PhpMyBorder -->
        <br/>
        <!-- begin PhpMyBorder -->
        <div style="width: 336px;">
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
            </b>
            <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                <div style="font-size:14px;padding-top:5px;padding-bottom:5px;font-weight:bold;padding-left:5px;border-bottom:1px solid #f0f0f0;text-align:center">
                    お買い物して開発支援
                </div>
                <div style="font-size:14px;margin-left:10px;padding-top:5px;padding-bottom:5px;text-align:center">
                    <SCRIPT charset="utf-8" type="text/javascript"
                            src="https://ws.amazon.co.jp/widgets/q?rt=tf_sw&ServiceVersion=20070822&MarketPlace=JP&ID=V20070822/JP/edolfzoku-22/8002/8fee357d-07c2-41bd-bac8-64706ac742a4"></SCRIPT>
                    <NOSCRIPT><A
                                HREF="https://ws.amazon.co.jp/widgets/q?rt=tf_sw&ServiceVersion=20070822&MarketPlace=JP&ID=V20070822/JP/edolfzoku-22/8002/8fee357d-07c2-41bd-bac8-64706ac742a4&Operation=NoScript">Amazon.co.jp
                            ウィジェット</A></NOSCRIPT>
                    <a href="https://click.linksynergy.com/fs-bin/click?id=K*SWrc0YTzA&offerid=270022.4&subid=0&type=4"><IMG
                                border="0" alt="楽天市場"
                                src="https://ad.linksynergy.com/fs-bin/show?id=K*SWrc0YTzA&bids=270022.4&subid=0&type=4&gridnum=6"></a>
                </div>
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
            </div>
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
            </b>
        </div>
        <!-- end PhpMyBorder -->
        <br/>
        <!-- マニュアル　begin PhpMyBorder -->
        <div id="manualList" style="width: 336px;">
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
            </b>
            <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                <div style="font-size:14px;padding-top:5px;padding-bottom:5px;font-weight:bold;padding-left:5px;border-bottom:1px solid #f0f0f0;text-align:center">
                    <a href="manual.php" style="font-weight:bold">聞々ハヤえもん オンラインマニュアル</a></div>

                <ol>
                    <li><a target="_blank" href="about.php">はじめに</a></li>
                    <li><a target="_blank" href="environment.php">動作環境について</a></li>
                    <li><a target="_blank" href="howtodownload.php">ダウンロードしてみよう</a></li>
                    <li><a target="_blank" href="boot.php">起動してみよう</a></li>
                    <li><a target="_blank" href="play.php">音楽を聴いてみよう</a></li>
                    <li><a target="_blank" href="changespeed.php">再生速度を変更してみよう</a></li>
                    <li><a target="_blank" href="whychangespeed.php">何の為に再生速度を変更するのか</a></li>
                    <li><a target="_blank" href="changefrequency.php">再生周波数を変更してみよう</a></li>
                    <li><a target="_blank" href="changepitch.php">音程を変更してみよう</a></li>
                    <li><a target="_blank" href="savefile.php">変換ファイルを保存してみよう</a></li>
                    <li><a target="_blank" href="abloop.php">ABループ機能を使ってみよう</a></li>
                    <li><a target="_blank" href="controls.php">コントロールの表示／非表示</a></li>
                    <li><a target="_blank" href="lyrics.php">歌詞を表示させてみよう</a></li>
                    <li><a target="_blank" href="effects.php">エフェクト機能を使ってみよう</a></li>
                    <li><a target="_blank" href="playrange.php">再生範囲を指定してみよう</a></li>
                    <li><a target="_blank" href="incspeed.php">だんだん速くする機能を使ってみよう</a></li>
                    <li><a target="_blank" href="eqpreset.php">EQプリセット機能を使ってみよう</a></li>
                    <li><a target="_blank" href="soundeffects.php">効果音機能を使ってみよう</a></li>
                    <li><a target="_blank" href="normalize.php">ノーマライズ機能を使ってみよう</a></li>
                    <li><a target="_blank" href="vocalcancel.php">ボーカルキャンセル機能を使ってみよう</a></li>
                    <li><a target="_blank" href="reverse.php">逆回転再生をしてみよう</a></li>
                    <li><a target="_blank" href="record.php">古びたレコード再生を使ってみよう</a></li>
                    <li><a target="_blank" href="versionup.php">バージョンアップをしてみよう</a></li>
                    <li><a target="_blank" href="uninstall.php">アンインストールする方法</a></li>
                </ol>

                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
            </div>
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
            </b>
        </div>
        <br/>
        <!-- マニュアル　end PhpMyBorder -->
        <!-- begin PhpMy<div style="border:1px solid #e0e0e0;border-radius:5px"><div style="border:1px solid #e0e0e0;border-radius:5px"><div style="border:1px solid #e0e0e0;border-radius:5px">Border -->
        <div style="width: 336px;">
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
                <b style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
            </b>
            <div style="background:#fcfcfc; border-color: #e0e0e0; color: inherit; display:block; border-style: solid ; border-width: 0 1px;">
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
                <div style="font-size:14px;padding-top:5px;padding-bottom:5px;font-weight:bold;padding-left:5px;border-bottom:1px solid #f0f0f0;text-align:center">
                    聞々ハヤえもんについて
                </div>
                <div style="font-size:14px;padding-top:5px;padding-left:15px;padding-right:10px">
                    あなたのご意見をお聞かせください<br>
                    <form action="<?php echo $o['Url']; ?>/cgi-bin/postmail.cgi" method="POST">
                        <input type=hidden name="need" value="">
                        <textarea name="メッセージ" rows="14" ACCESSKEY="M" style="width:305px"></textarea><br>
                        <input type=submit value="送信する">
                    </form>
                    ※開発者からの返信が必要な場合は、返信先をご記入ください。
                </div>
                <b style="font-size:1px;display:block; overflow:hidden;height:1px;"></b>
            </div>
            <b style="font-size:1px;display:block; overflow:hidden;">
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;border-style: solid; border-width: 0 1px;height:2px; margin:0 1px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 2px;"></b>
                <b style="background:#fcfcfc;border-color: #e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;border-style: solid; border-width: 0 1px;margin:0 3px; border-width:0 2px;"></b>
                <b style="background:#e0e0e0; color: inherit; display:block; overflow:hidden;height:1px;margin:0 5px;"></b>
            </b>
        </div>
        <!-- end PhpMyBorder -->

    </div><!-- /links-right -->
</div><!-- /links-right-box -->
<?php
include('./include/footer.php');
?>
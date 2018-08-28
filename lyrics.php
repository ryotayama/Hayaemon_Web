<?php
$set['PageTitle'] = '聞々ハヤえもんで歌詞を表示させる方法';
$set['column'] = 'one';
$set['type'] = 'manual';
include('config.inc.php');

include('./include/header.php');

?>
                    <div class="font30" style="color:#808080;font-weight:bold">音楽に合わせて歌うこと、それが最高のストレス解消。</div>
                    <br>
                    <center>
                        <!-- How_About_Top_728x90 -->
                        <div id='div-gpt-ad-1353715793997-1' style='width:728px; height:90px'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function () {
                                    googletag.display('div-gpt-ad-1353715793997-1');
                                });
                            </script>
                        </div>
                    </center>
                    <br><br>
                    このページでは、歌詞を表示させる方法を説明します。<br>
                    聞々ハヤえもんをご存知無い方は、まず以下のページをご覧ください。<br><br>
                    <a href="about.php" class="font25 btn">聞々ハヤえもんについて</a><br><br>
                    まだ聞々ハヤえもんをダウンロードしていない方は、以下のページをご覧ください。<br><br>
                    <a href="howtodownload.php" class="font25 btn">聞々ハヤえもんをダウンロードする方法</a>
                </div>
                <div class="font26" style="margin-top:60px;margin-bottom:20px;font-weight:bold">LRC歌詞ファイルを作成。</div>
                <div style="margin-left:20px">
                    聞々ハヤえもんはLRC歌詞ファイルの表示に対応しています。LRC歌詞ファイルとは、以下のようなフォーマットのファイルです。<br>
                    <br>
                    <div style="border:1px #a0a0a0 solid;padding:5px">
                        [ti:福神漬けのうた]<br>
                        [ar:山内良太]<br>
                        [00:24.00]福神漬けが食べたいな　福神漬けが食べたいな<br>
                        [00:29.00]カレーに良く合う　福神漬け
                    </div>
                    <br>
                    1行ずつ説明します。まず1行目の[ti:福神漬けのうた]は、曲のタイトルが「福神漬けのうた」というタイトルであることを意味しています。<br>
                    <br>
                    2行目の[ar:山内良太]は、アーティスト名が「山内良太」であるという意味です。<br>
                    <br>
                    3行目の[00:24.00]福神漬けが食べたいな　福神漬けが食べたいなというのは、24秒目のタイミングで「福神漬けが食べたいな　福神漬けが食べたいな」という歌詞を表示させるための記述です。4行目は29秒目のタイミングで「カレーに良く合う　福神漬け」という歌詞を表示させるための記述です。<br>
                    <br>
                    こんな風にして、LRC歌詞ファイルを作成します。
                </div>
                <div class="font26" style="margin-top:40px;margin-bottom:20px;font-weight:bold">音声ファイルと同じ場所に保存。</div>
                <div style="margin-left:20px">
                    LRC歌詞ファイルが完成したら、音声ファイルと同じ場所に拡張子以外は同じ名前で保存します。<br>
                    <br>
                    例えば、「C:\Music\山内良太 - 福神漬け.mp3」というファイルが音声ファイルだとしたら、LRC歌詞ファイルも同じように「C:\Music」フォルダに「山内良太 -
                    福神漬け.txt」という名前で保存します。<br>
                    <br>
                    こうすることで、聞々ハヤえもんがLRC歌詞ファイルを読み込めるようになります。
                </div>
                <br><br>
                <div style="float:left">
                    <a href="controls.php" class="font19 lbtn">聞々ハヤえもんでコントロールの表示状態を切り替える方法</a>
                </div>
                <div style="float:right;text-align:right">
                    <a href="effects.php" class="font19 btn">聞々ハヤえもんでエフェクト機能を使う方法</a>
                </div>
                <br><br>
                <center>
                    <!-- How_About_Bottom_728x90 -->
                    <div id='div-gpt-ad-1353715793997-0' style='width:728px; height:90px;'>
                        <script type='text/javascript'>
                            googletag.cmd.push(function () {
                                googletag.display('div-gpt-ad-1353715793997-0');
                            });
                        </script>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <br>
<?php
include('./include/footer.php');
?>
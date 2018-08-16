<?php
$set['PageTitle'] = '聞々ハヤえもん オンラインマニュアル';
$set['column'] = 'one';
$set['type'] = 'manual';
include('config.inc.php');

include('./include/header.php');

?>
                    <div class="font30" style="color:#808080;font-weight:bold">ソフトを使い始める、原点となる場所。</div>
                    <br/>
                    <div style="text-align:center;vertical-align: top"><a href="https://b.hatena.ne.jp/entry/"
                                                                          class="hatena-bookmark-button"
                                                                          data-hatena-bookmark-layout="standard"
                                                                          title="このエントリーをはてなブックマークに追加"><img
                            src="https://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加"
                            width="20" height="20" style="border: none"/></a>　
                        <div class="fb-like" data-send="false" data-layout="button_count" data-width="450"
                             data-show-faces="true"
                             style="display: inline-block; _display: inline;vertical-align: top"></div>
                        　<a href="https://twitter.com/share" class="twitter-share-button" data-via="ryota_yama"
                            data-lang="ja"></a>
                        <div style="display: inline-block; _display: inline;vertical-align: top;width:70px !important">
                            <g:plusone size="medium"></g:plusone>
                        </div>
                    </div>
                    <br/>
                    <center>
                        <!-- How_Manual_Top_728x90 -->
                        <div id='div-gpt-ad-1369654236269-1' style='width:728px; height:90px;'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function () {
                                    googletag.display('div-gpt-ad-1369654236269-1');
                                });
                            </script>
                        </div>
                        <br/>
                    </center>
                </div>
                <ol id="indexList">
                    <li><a href="about.php">はじめに</a></li>
                <li><a href="environment.php">動作環境について</a></li>
                <li><a href="howtodownload.php">ダウンロードしてみよう</a></li>
                    <li><a href="boot.php">起動してみよう</a></li>
                <li><a href="play.php">音楽を聴いてみよう</a></li>
                    <li><a href="changespeed.php">再生速度を変更してみよう</a></li>
                <li><a href="whychangespeed.php">何の為に再生速度を変更するのか</a></li>
                    <li><a href="changefrequency.php">再生周波数を変更してみよう</a></li>
                    <li><a href="changepitch.php">音程を変更してみよう</a></li>
                <li><a href="savefile.php">変換ファイルを保存してみよう</a></li>
                    <li><a href="abloop.php">ABループ機能を使ってみよう</a></li>
                    <li><a href="controls.php">コントロールの表示／非表示</a></li>
                <li><a href="lyrics.php">歌詞を表示させてみよう</a></li>
                <li><a href="effects.php">エフェクト機能を使ってみよう</a></li>
                <li><a href="playrange.php">再生範囲を指定してみよう</a></li>
                <li><a href="incspeed.php">だんだん速くする機能を使ってみよう</a></li>
                <li><a href="eqpreset.php">EQプリセット機能を使ってみよう</a></li>
                <li><a href="soundeffects.php">効果音機能を使ってみよう</a></li>
                <li><a href="normalize.php">ノーマライズ機能を使ってみよう</a></li>
                <li><a href="vocalcancel.php">ボーカルキャンセル機能を使ってみよう</a></li>
                <li><a href="reverse.php">逆回転再生をしてみよう</a></li>
                <li><a href="record.php">古びたレコード再生を使ってみよう</a></li>
                <li><a href="versionup.php">バージョンアップをしてみよう</a></li>
                <li><a href="uninstall.php">アンインストールする方法</a></li>
                </ol>
                <div class="font24" style="margin-top:100px;font-weight:bold">≪マニュアルを読んでも分からないことがあった場合≫</div>
                <div style="margin-top:10px;margin-left:20px">
                    マニュアルを読んでも分からないことがあった場合は、下記の方法でお問い合わせいただく事ができます。<br/>
                </div>
                <br/>
                <div class="font24" style="margin-top:20px;margin-left:20px;font-weight:bold">①聞々ハヤえもんユーザーコミュニティで質問する。
                </div>
                <div style="margin-top:10px;margin-left:40px">
                    聞々ハヤえもんユーザーコミュニティには、「質問」というカテゴリが存在している為、そちらにご投稿ください。開発者であるりょーた、または、親切なユーザー様から答えが得られるかもしれません。<br/><br/>
                    <a href="./wiki/" target="_blank" class="font20 btn">聞々ハヤえもんユーザーコミュニティ</a>
                    <br/>
                </div>
                <div class="font24" style="margin-top:40px;margin-left:20px;font-weight:bold">②開発者にメールを送ってみる。</div>
                <div style="margin-top:10px;margin-left:40px">
                    開発者であるりょーたに直接の質問がある場合は、<a href="mailto:Ryota.Yamauch@gmail.com">Ryota.Yamauch@gmail.com</a>までメールをお送りください。
                </div>
                <div class="font24" style="margin-top:40px;margin-left:20px;font-weight:bold">③メールフォームから質問してみる。</div>
                <div style="margin-top:10px;margin-left:40px">
                    下記のメールフォームからも簡単にメールをお送りいただく事ができます。返信が必要な場合は、あなたのメールアドレスを併せてご記入ください。
                    <form action="<?php echo $o['Url']; ?>/cgi-bin/postmail.cgi" method="POST">
                        <input type=hidden name="need" value="">
                        <textarea name="メッセージ" rows="4" ACCESSKEY="M" style="width:480px"></textarea><br>
                        <input type=submit value="送信する">
                    </form>
                </div>
                <br/>
                <center>
                    <!-- How_Manual_Bottom_728x90 -->
                    <div id='div-gpt-ad-1369654236269-0' style='width:728px; height:90px;'>
                        <script type='text/javascript'>
                            googletag.cmd.push(function () {
                                googletag.display('div-gpt-ad-1369654236269-0');
                            });
                        </script>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <br/>
<?php
include('./include/footer.php');
?>
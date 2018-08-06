<?php
$set['PageTitle'] = 'ダウンロード';
$set['column'] = 'one';
$set['type'] = 'download';
include('../config.inc.php');
include('../include/functions.php');
include('../include/header.php');
?>
<style>
    .CircleBorder {
        border: 1px solid #e0e0e0;
        border-radius: 5px;
    }
</style>
<div class="CircleBorder">
    <div class="font15" style="margin:20px 25px 20px 25px; line-height: 150%;text-align:left;background-image:url(music.png);background-repeat:no-repeat">
        <div style="margin-left:60px;margin-right:60px">
            <div class="content">
                <div class="i18n-ja">
                    <p>このファイルは、公開期限が終了したか・セキュリティー上の問題を含んでいるためダウンロードできません。</p>
                    <p>別のファイルを選択するか、<a href="/download/latest">最新のファイル</a>をダウンロードしてください</p>
                </div>
                <div class="i18n-en">
                    <p>This file can not be downloaded because the publication deadline has ended and security problems are included.</p>
                    <p>Please choose another file or download the <a href="/download/latest">latest file</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../include/footer.php');
?>

<?php
$set['PageTitle'] = 'メンテナンス中です';
$set['column'] = 'one';
$set['type'] = 'maintenance';
include('config.inc.php');

include('./include/header.php');

?>
    <div style="border:1px solid #e0e0e0;border-radius:5px;text-align: center;padding:10%;">

        <h1>メンテナンス中です</h1>
        <p>申し訳ありません、只今メンテナンス中です。</p>
    </div>
<?php
include('./include/footer.php');
?>
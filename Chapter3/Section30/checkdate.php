<?php
// Chapter3 PHPの組み込み関数 Section30 日付・時刻
// 日付・時刻を使用するには
// 日付のチェック「日付の妥当性をチェックする」
// $変数 = checkdate( 月, 日, 年 );

$month = 2;
$day     = 15;
$year    = 2014;

if( !checkdate($month, $day, $year) ){
    echo '正しい日付を入力してください。';
}else{
    echo '正しい日付です。';
}
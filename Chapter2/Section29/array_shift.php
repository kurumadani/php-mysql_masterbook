<?php
// Chapter3 PHPの基礎 Section29 配列先頭データの追加削除
// 先頭にデータを削除する
// array_shift( $配列 );


$data = array( "りんご", "みかん", "かき" );
$apple = array_shift($data);
echo "<pre>";
var_dump( $data );
echo "</pre>";
echo $apple;
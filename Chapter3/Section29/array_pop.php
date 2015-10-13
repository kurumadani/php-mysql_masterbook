<?php
// Chapter3 PHPの組み込み関数 Section29 配列末尾データの追加削除
// 末尾のデータを削除する
//
// array_pop( $配列 );
// 配列の末尾からデータを１つ取り出して変数に格納するし、配列は取り出したデータ１つ分短くなる。



$data = array( "りんご", "みかん", "かき" );
$kaki = array_pop($data);
echo "<pre>";
var_dump( $data );
echo "</pre>";
echo $kaki;
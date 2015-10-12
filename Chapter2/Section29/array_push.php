<?php
// Chapter3 PHPの基礎 Section29 配列末尾データの追加削除
// 末尾にデータを追加する
// array_push( $配列 , "追加文字列" );
// array_push( $配列 , $追加変数 );

$data = array( "りんご", "みかん", "かき" );
// $data2 = array( "りんご", "みかん", "かき" );
array_push( $data, "なし", "すいか" );
// array_push( $data, $data2 );
echo "<pre>";
var_dump( $data );
echo "</pre>";
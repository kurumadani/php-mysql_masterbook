<?php
// Chapter3 PHPの基礎 Section29 配列先頭データの追加削除
// 先頭にデータを追加する
// array_unshift( $配列 , "追加文字列" );
// array_unshift( $配列 , $追加変数 );

$data = array( "りんご", "みかん", "かき" );
// $data2 = array( "りんご", "みかん", "かき" );
array_unshift( $data, "パパイヤ", "キィウィ" );
// array_unshift( $data, $data2 );
echo "<pre>";
var_dump( $data );
echo "</pre>";
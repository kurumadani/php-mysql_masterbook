<?php
// Chapter3 PHPの基礎 Section29 配列の結合と切り出し
// 配列をマージ
// $配列 = array_merge( $元の配列, $追加配列 );

$data = array("TV1" => "500", "TV2" => "1000", "RADIO1" => "800" );
$add_data = array( "TV1" =>"2000", "RADIO2" => "600" );
$result = array_merge( $data, $add_data );
echo "<pre>";
var_dump( $result );
echo "</pre>";

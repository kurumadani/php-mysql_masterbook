<?php
// Chapter3 PHPの組み込み関数 Section29 その他の関数
// データを反転する
// $配列 = array_reverse( $元の配列 );



$data = array( "A", "B", "C", "D", "E" );
echo "<pre>";
var_dump( $data );
echo "</pre>";
$result = array_reverse( $data );
echo "<pre>";
var_dump( $result );
echo "</pre>";
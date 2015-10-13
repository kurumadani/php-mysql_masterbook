<?php
// Chapter3 PHPの組み込み関数 Section29 配列の結合と切り出し
// 配列を切り出す
// $配列 = array_slice( $元の配列, 開始位置, 長さ );



$data = array( "A", "B", "C", "D", "E" );
echo implode( ',', $data ).'<br>';
$result = array_slice( $data, 0, 4 ); // A,B,C,D 取り出す。
echo implode( ',', $result ).'<br>';
$result = array_slice( $data, -3, 1 ); // C 取り出す。
echo implode( ',', $result ).'<br>';
$result = array_slice( $data, 3, -1 ); // D 取り出す。
echo implode( ',', $result ).'<br>';
$result = array_slice( $data, 2 ); // C,D,E 取り出す。
echo implode( ',', $result ).'<br>';
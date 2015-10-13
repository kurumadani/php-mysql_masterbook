<?php
// Chapter3 PHPの組み込み関数 Section28 文字列の操作
// 入力データの処理　文字列を分割する
//
// $変数 = substr(文字列, 文字列の位置, 文字列の長さ);


$string = "ABCDEFGHIJKLMN";
$result = substr($string, 3, 5);

print $result;
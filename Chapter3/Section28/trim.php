<?php
// Chapter3 PHPの組み込み関数 Section28 文字列の操作
// 入力データの処理　スペースを除去する
//
// $変数 = trim(文字列);


$string = " 1234567890 ";
$result = trim($string);

print $string."<br>\n";
print $result."<br>\n";
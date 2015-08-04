<?php
// Chapter3 PHPの基礎　Section28 文字列の操作
// 入力データの処理　文字列バイト数を得る
// 
// $変数 = strlen($文字列); //UTF-8としてバイト数がカウントされる
// $変数 = mb_strlen($文字列); //日本語として何文字あるかカウントされる



$str = "こんにちは！";

$length    = strlen($str);
$mb_length = mb_strlen($str);

print $length."<br>\n"; // 18
print $mb_length."<br>\n"; // 6
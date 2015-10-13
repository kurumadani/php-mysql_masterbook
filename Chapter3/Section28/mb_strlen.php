<?php
// Chapter3 PHPの組み込み関数 Section28 文字列の操作
// 入力データの処理　文字列バイト数を得る
//
// $変数 = strlen($文字列); //UTF-8としてバイト数がカウントされる
// $変数 = mb_strlen($文字列); //日本語として何文字あるかカウントされる



$str = "こんにちは！";

$length    = strlen($str);
$mb_length = mb_strlen($str);

print $length."<br>\n"; // 18(UTF-8では日本語全角文字は３バイトでカウントされる)
print $mb_length."<br>\n"; // 6(日本語として何文字あるかカウントされる)

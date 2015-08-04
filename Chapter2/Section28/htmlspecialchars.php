<?php
// Chapter3 PHPの基礎　Section28 文字列の操作
// HTMLの表示　HTMLタグを無効にする
// 
// 
// $変数 = htmlspecialchars(文字列, オプション);
// 
// オプション		: 意味
// ENT_COMPAT	: 「"」のみ変換（デフォルトのオプション）
// ENT_QUOTES   : 「"」「'」どちらも変換
// ENT_NOQUOTES : どちらも変換しない



$string = '<a href="http://book.mycom.co.jp/">マイナビブックス</a>\n';
$result = htmlspecialchars($string, ENT_QUOTES);

print $result;
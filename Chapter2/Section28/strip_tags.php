<?php
// Chapter3 PHPの基礎　Section28 文字列の操作
// HTMLタグを取り除く
// 
// $変数 = strip_tags(文字列, 許可するタグ);



$string = '<a href="http://book.mycom.co.jp/">マイナビブックス</a>';
$result = strip_tags($string);
// $result = strip_tags($string, '<a>');

print $result;
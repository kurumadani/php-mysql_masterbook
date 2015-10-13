<?php
// Chapter3 PHPの組み込み関数 Section28 文字列の操作
// 入力データの処理　文字列を置換する
//
// $変数 = str_replace(置換対象文字, 置換文字, 文字列);


$html    = '<font size="3">Hello!</font><br>';
$search  = 'size="3"';
$replace = 'size="5"';


$result  = str_replace( $search, $replace, $html);

print $result;
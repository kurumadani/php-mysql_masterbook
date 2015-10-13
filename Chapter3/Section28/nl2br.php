<?php
// Chapter3 PHPの組み込み関数 Section28 文字列の操作
// 改行コードの前に改行タグをつける
//
// $変数 = nl2br(文字列);



$string = 'PHPの関数は
とても便利
ですね。';

$result = nl2br($string);
print $result;
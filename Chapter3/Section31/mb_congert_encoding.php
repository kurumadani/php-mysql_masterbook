<?php
// Chapter3 PHPの組み込み関数 Section31 ファイルを操作するには
// ファイルの読み書き
// 文字コードを変換する

$filename = "test.03.txt";
$contents = "あいうえおかきくけこ";
$contents = mb_convert_encoding($contents, "SJIS", "UTF-8");
if( file_put_contents($filename, $contents) ){
    echo "書き込みました。";
} else {
    echo "失敗しました。";
}

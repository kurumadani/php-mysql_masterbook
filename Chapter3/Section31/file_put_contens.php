<?php
// Chapter3 PHPの組み込み関数 Section31 ファイルを操作するには
// ファイルの読み書き
// ファイルにデータを書き込む
// file_put_contents( "ファイル名", $変数 );

$filename = "test01.txt";
$contents = "abcdefghijklmn";
if( file_put_contents($filename, $contents) ){
    echo "書き込みました。";
} else {
    echo "失敗しました。";
}

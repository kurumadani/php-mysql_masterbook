<?php
// Chapter3 PHPの組み込み関数 Section31 ファイルを操作するには
// ファイルの操作
// ファイルを削除する
// $変数 = unlink("ファイル名");

$filename = "test04.txt";
if( is_file($filename) && unlink($filename) ){
    echo  $filename . "を削除しました。";
} else {
    echo $filename ."は削除出来ませんでした。";
}
<?php
// Chapter2 PHPの基礎　Section16 演算子
// 実行演算子　実行演算子の使用
// $filelist = `ls -laF`; //mac Linux上のシェルコマンド
$filelist = `dir`; //Windowで実行する場合　※UTF-8だと文字化けする


print "<pre>";
print $filelist;
print "</pre>";
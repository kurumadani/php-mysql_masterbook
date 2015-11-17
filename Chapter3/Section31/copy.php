<?php
// Chapter3 PHPの組み込み関数 Section31 ファイルを操作するには
// ファイルの操作
// ファイルをコピーする
// copy(コピー元ファイル名, コピー先ファイル名)


if( copy("test.txt", "test.bak") ){
    echo "コピー成功";
} else {
    echo "コピー失敗";
}
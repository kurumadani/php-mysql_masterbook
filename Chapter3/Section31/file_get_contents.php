<?php
// Chapter3 PHPの組み込み関数 Section31 ファイルを操作するには
// ファイルの読み書き
// ファイルを読み込む
// $変数 = file_get_contents( "ファイル名またはURL" );
// 読み込んだファイルの内容を1行ごとに「配列」に取得したい時は
// file関数を使用するといい、使い方は同じ。

$filename = 'test.txt';
if( is_readable( $filename ) ){
    $contents = file_get_contents( $filename );
    // $contents = file( 'http://kurumadani.com/php-mysql_masterbook/Chapter3/Section31/test.txt');
    echo $contents;
    // echo '<pre>';
    // var_dump($contents);
    // echo '</pre>';
}else{
    echo $fillename."は読み込みません";
}

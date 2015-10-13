<?php
// Chapter3 PHPの組み込み関数 Section29 配列を操作するには
// 連想配列内のデータを並び替え　キーを降順でソートする
//
// krsort( $配列 , フラグ(省略化) );
//
// フラグ          : 意味
// SORT_REGULAR     : 通常通りにデータを比較
// SORT_NUMERIC     : 数値としてデータを比較
// SORT_STRING      : 文字列としてデータを比較
// SORT_LOCALE_STRING   : 現在のロケールに基づいてデータを比較
// SORT_NATURAL     : データを自然順で比較
// SORT_FLAG_CASE   : SORT_STRINGやSORT_NATURALと組み合わせて比較します



$sales = array( "TV2" => "1000", "TV1" => "500", "RADIO1" => "800" );
echo "<pre>";
var_dump($sales);
echo "</pre>";

krsort( $sales );

echo "<pre>";
var_dump($sales);
echo "</pre>";
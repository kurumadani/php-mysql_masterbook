<?php
// Chapter3 PHPの組み込み関数 Section29 配列を操作するには
// 配列内のデータの並び替え　降順にソートする
//
// rsort( $配列 , フラグ(省略化) );
// フラグ			: 意味
// SORT_REGULAR		: 通常通りにデータを比較
// SORT_NUMERIC		: 数値としてデータを比較
// SORT_STRING		: 文字列としてデータを比較
// SORT_LOCALE_STRING	: 現在のロケールに基づいてデータを比較
// SORT_NATURAL		: データを自然順で比較
// SORT_FLAG_CASE	: SORT_STRINGやSORT_NATURALと組み合わせて比較します




$numbers = array( 18, 7, 20, 5 );
echo "<pre>";
var_dump($numbers);
echo "</pre>";

rsort( $numbers );

echo "<pre>";
var_dump($numbers);
echo "</pre>";
<?php
// Chapter3 PHPの組み込み関数 Section29 配列を操作するには
// 配列のデータを全て変数に格納する
//
// list( $変数 1, $変数 2, $変数 3 ) = $配列;



$data = array( "りんご", "みかん", "かき" );
list( $fruit0, $fruit1, $fruit2,  ) = $data;

echo $fruit0;
echo "<br>";
echo $fruit1;
echo "<br>";
echo $fruit2;
echo "<br>";

/*******************************************************/
// 上のコードと同じ意味です。
// $fruit0 = $data[0];
// $fruit1 = $data[1];
// $fruit2 = $data[2];
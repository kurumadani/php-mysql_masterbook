<?php
// Chapter3 PHPの組み込み関数 Section28 文字列の操作
// データベースへ渡す文字列の加工　文字列から配列を作成する
//
// $変数 = explode(区切り文字, 文字列);




$string = "りんご,みかん,かき,くり";
$array = explode(',',$string);

print "<pre>";
print_r($array);
print "</pre>";
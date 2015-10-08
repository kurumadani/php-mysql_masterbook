<?php
// Chapter3 PHPの基礎　Section28 文字列の操作
// 配列を使った文字列処理
//
// $変数 = implode(区切り文字, 配列);



$data = array("りんご","みかん","かき","くり");
$result = implode(',',$data);
// $result = join(',',$data);

print $result;
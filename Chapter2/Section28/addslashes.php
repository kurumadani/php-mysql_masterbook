<?php
// Chapter3 PHPの基礎　Section28 文字列の操作
// データベースへ渡す文字列の加工　エラーになる文字をエスケープする
// 
// $変数 = addslashes(文字列);


$string = '"りんご","みかん","かき","くり"';
$result = addslashes($string);
print $result;
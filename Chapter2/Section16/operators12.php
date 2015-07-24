<?php
// Chapter2 PHPの基礎　Section16 演算子
// 配列演算子　配列演算子の使用

$data1 = array("name" => "○田○夫","age" => 20);
$data2 = array("name" => "○木○郎","tall" => 180,"age" => 30);

$data = $data1 + $data2;

print "<pre>";
var_dump($data); //統合により「tall」のデータだけ追加される。同じキーの配列は上書きされない。
print "</pre>";
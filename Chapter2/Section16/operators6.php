<?php
// Chapter2 PHPの基礎　Section16 演算子
// 三項演算子　三項演算子の使用

$age = 19; //年齢
$adult_age = 20; //比較のための年齢
$adult_check = ($adult_age <= $age)? "大人":"子供"; //年齢が２０以上であればTRUE,19以下ならFALSE

print $adult_check.'です。';
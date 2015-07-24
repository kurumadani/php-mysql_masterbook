<?php
// Chapter2 PHPの基礎　Section17 if文
// if文

$username = 'user';
$password = 'pass';


$db_data["username"] = "user";
$db_data["password"] = "pass";

if($db_data["username"] == $username &&
	$db_data["password"] == $password)
{
	//会員ページ表示
	print "会員ページです。";
}
<?php
// Chapter2 PHPの基礎　Section25 引数
// 引数にデフォルト値を設定する


// $user = "dani";
// $pass = "dani";
// check_member($user,$pass);
check_member();


// 	【　デフォルト値の指定の順番　】
// デフォルト値を複数指定する場合、
// デフォルト値を指定した引数の右側に、
// デフォルト値を指定しない引数があるとエラーよりもあとになる。
function check_member($username="guest",$password="guest")
// これは動作しない
// function check_member($username="guest", $password)

// これは動作する
// function check_member($username, $password="guest")
{

	if($username == "guest" && $password == "guest")
	{

		print "ゲストさん、ようこそ！";

	}else{

		print "会員さん、ようこそ！";

	}

}
<?php
// Chapter2 PHPの基礎　Section26 返り値
// 帰り値とは


$str = "abcdefghijklemnop";
$byte = 16;

$flag = checkByte($str,$byte);

if($flag)
{

	print "OKです。";

}else{

	print "エラーです。";
	print $byte;
	print "バイトを超えています。";

}


function checkByte($str, $byte)
{

	$strlen = strlen($str);
	if($strlen <= $byte)
	{

		return true;

	}

	return false;
}
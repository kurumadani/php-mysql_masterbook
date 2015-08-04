<?php
// Chapter2 PHPの基礎　Section27 グローバル変数
// グローバル宣言を行う


// グローバルスコープの変数
$data = 5;

function scope_test()
{

	// グローバル変数の宣言
	global $data;

	// グローバルスコープの変数を参照
	$data += 1;
	print $data;
	print "<br>\n";

}


print $data;
print "<br>\n";

scope_test();

print $data;
print "<br>\n";

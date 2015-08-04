<?php
// Chapter2 PHPの基礎　Section27 グローバル変数
// グローバル変数の使用

// グローバルスコープの変数
$data = 5;

function scope_test()
{

	// ローカルスコープの変数を参照
	$data = 1;
	print $data;
	print "<br>\n";
}


print $data; // ←　グローバルスコープの値
print "<br>\n";


scope_test(); // ← ローカルスコープの値


print $data; // ←　グローバルスコープの値(ローカルスコープの影響はない)
print "<br>\n";
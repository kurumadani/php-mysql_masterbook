<?php
// Chapter2 PHPの基礎　Section27 グローバル変数
// $GLOBALSを使う


// グローバルスコープの変数
$data = 5;

function scope_test()
{

	//グローバルスコープの変数を参照
	$GLOBALS['data'] += 1; // ←スーパーグローバルと呼ばれてる
	print $GLOBALS['data'];
	print "<br>\n";

}

print $data;
print "<br>\n";

scope_test();

print $data;
print "<br>\n";
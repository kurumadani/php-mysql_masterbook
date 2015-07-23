<?php
// Chapter2 PHPの基礎　Section15 連想配列
// 配列と連想配列の組み合わせ　2　データを参照する
$member[] = array(
				"name" => "○田○夫",
				"age" => 20,
				"tall" => 170
			   );

print $member[0]["name"];
print "<br>";
print $member[0]["age"];
print "<br>";
print $member[0]["tall"];
<?php
// Chapter2 PHPの基礎　Section15 連想配列
// 連想配列の作成 データの格納
$member = array(
					"name" => "○田○夫",
					"age"  => 20,
					"tall" => 170
				);
print $member["name"]."さん";
print "<br>";
print $member["age"]."才";
print "<br>";
print $member["tall"]."cm";
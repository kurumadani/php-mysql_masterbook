<?php
// Chapter2 PHPの基礎　Section22 continue break文
// 繰り返し処理の中断　break



$member[0] = "○田○夫";
$member[1] = "○山○夫";
$member[2] = "○川△夫";
$member[3] = "○木×夫";
$member[4] = "○村▽夫";

$i     = 1;
$limit = 3;

foreach($member as $key => $value)
{

	if($i > $limit)
	{

		print "ループを抜けます。<br>\n";
		break;

	}

	print "名前 : ".$value;
	print "<br>\n";
	$i++;
}
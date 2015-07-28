<?php
// Chapter2 PHPの基礎　Section26 返り値
// 複数の値を返す



list($year,$month,$day) = get_today();

print $year.'年'.$month.'月'.$day.'日';

function get_today()
{

	$year  = date('Y');
	$month = date('m');
	$day   = date('d');
	return array($year,$month,$day);
	
}
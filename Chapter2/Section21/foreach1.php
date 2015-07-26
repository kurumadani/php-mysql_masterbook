<?php
// Chapter2 PHPの基礎　Section21 foreach文
// foreach文　動作確認


$week = array("月","火","水","木","金","土","日");

foreach($week as $value)
{

	print $value;
	print "<br>";
}
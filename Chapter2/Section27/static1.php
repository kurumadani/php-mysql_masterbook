<?php
// Chapter2 PHPの基礎　Section27 グローバル変数
// staticの使い方


counter();
counter();
counter();
counter();
counter();

function counter()
{

	$data = 0;
	print $data++;
	print "<br>\n";
}

//関数内で$dataを初期化してるから０を５回表示するだけで、
//カウントはしない。
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

	static $data = 0;
	print $data++;
	print "<br>\n";

}


//　static宣言することにより
//　$dataはグローバル変数のように扱われ、
//　カウンとするように表示される。
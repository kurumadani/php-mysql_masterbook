<?php
// Chapter2 PHPの基礎　Section20 foreach文
// foreach文　配列ポインタ
// 
// while文 list関数 each関数などで配列を処理すると、
// 配列のポインタが移動して、意図した動作がすることがある。
// foreach文は処理前に配列のポインタをリセットするが、
// 他は前処理で進んだポインタ位置から始めるので注意が必要。
// 
// もしwhile文なので、foreach文を再現する場合
// reset関数などで、ポインタを先頭に戻す

$week = array("月","火","水","木","金","土","日");

reset($week);

while( list( $key , $value ) = each( $week ) )
{

	print $key ."番目の値 : ". $value;
	print "<br>";
	
}
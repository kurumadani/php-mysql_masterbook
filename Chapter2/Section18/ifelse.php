<?php
// Chapter2 PHPの基礎　Section18 switch文
// if・・・elseif・・・else文

$type = "form";

if($type == "form")
{

	print "登録フォームです。";

}elseif($type == "exec"){

	print "登録処理を実行中";

}else{

	//エラー処理
	print "画面がありません。";

}
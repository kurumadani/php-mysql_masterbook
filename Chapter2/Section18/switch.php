<?php
// Chapter2 PHPの基礎　Section18 switch文
// switch文

$type = "form";

switch($type)
{

	//登録フォームを表示
	case "form":
		print "登録フォームです。";
		break;

	//確認画面を表示
	case "confirm":
		print "確認画面です。";
		break;

	//登録処理を実行中
	case "exec":
		print "登録処理を実行中";
		break;

	//エラー処理
	default:
		print "画面がありません。";

}

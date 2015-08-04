2-1
変数$telに文字列「03-0000-0000」を格納するコードを記述してください。

<?php
	$tel = "03-0000-0000";
?>

2-2
for文を使って1から10までを表示するコードを記述してください。

<?php
	for($i=1; $i<=10; $i++)
	{
		print $i."<br>\n";
	}
?>

2-3
もし、$strに格納された値が「登録」だったら、「登録しました。」と表示するコードを記述してください。

<?php
	if ($str == "登録")
	{
		print "登録しました。";
	}else{
		print "失敗しました。";
	}
?>


2-4
連想配列$memberのキーと値をforeach文を使ってすべて表示してください。
$member = array("name"    => "○田○夫",
				"tel"     => "03-0000-0000",
				"address" => "東京都千代田区");

<?php
$member = array("name"    => "○田○夫",
				"tel"     => "03-0000-0000",
				"address" => "東京都千代田区");

foreach($member as $key => $value)
{
	print $key." : ".$value."<br>\n";
}
?>

2-5
ユーザー定義関数「test」を作成してください。
引数$nameに名前を指定すると「○○さん、こんにちは！」と
文字列を返す機能を持たせてください。

<?php
function test($name){
	$str = $name."さん、こんにちは！\n";
	return $str;
}
?>

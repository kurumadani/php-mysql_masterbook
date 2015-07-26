<?php
// Chapter2 PHPの基礎　Section22 continue break文
// 繰り返し処理を次に飛ばす　continue



$member = array("name" => "○田○夫",
				"tel"  => "03-0000-0000",
				"age"  => 20,
				"tall" => 170);

foreach($member as $key => $value)
{

	if($key == "name")
	{

		$title = "名前 ";

	}elseif($key == "age"){

		$title = "年齢 ";

	}elseif($key == "tall"){

		$title = "身長 ";

	}else{

		print "処理を飛ばします。<br>\n";
		continue;

	}

	print $title . " : " . $value;
	print "<br>\n";

}
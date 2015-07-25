<?php
// Chapter2 PHPの基礎　Section20 foreach文
// foreach文　連想配列の操作

$member = array("name" => "○田○夫",
				"age"  => 20,
				"tall" => 170);

foreach($member as $key => $value)
{

	if($key == "name")
	{

		$title = "名前";

	}else if($key == "age"){

		$title = "年齢";

	}else if($key == "tall"){

		$title = "身長";
	
	}

	print $title . " : " . $value;
	print "<br>\n";
}


// $html = '';
// foreach($member as $key => $value)
// {

// 	if($key == "name")
// 	{

// 		$html .= "名前 : ".$value."さん<br>\n";

// 	}else if($key == "age"){

// 		$html .= "年齢 : ".$value."才<br>\n";

// 	}else if($key == "tall"){

// 		$html .= "身長 : ".$value."cm<br>\n";
	
// 	}
// }

// print $html;

<!-- Chapter2 PHPの基礎　Section23 require文・include文 -->
<!-- require文の使用　１　読み込む側のファイル -->

<html>
<head>
<title>PHPテスト</title>
</head>
<body>


<?php

	require("data.php");
	// $link = "data.php";
	// require $link;

	print $name . "さま<br>\n";
	print $message."<br>\n";

?>


</body>
</html>
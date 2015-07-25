<?php
// Chapter2 PHPの基礎　Section19 while文
// while文 while文を使う

if($dirhandle = opendir('.'))
{

	while(false !== ($filename = readdir($dirhandle)))
	{

		print $filename."<br>";

	}
	
	closedir($dirhandle);

}
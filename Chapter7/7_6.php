<?php
	$fh = fopen("testfile.txt", 'r') or die("Файл не существует, или вы не обладаете правами на его открытие");

	$text = fread($fh, 3);
	fclose($fh);
	echo $text;
?>
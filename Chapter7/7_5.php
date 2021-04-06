<?php
	$fh = fopen("testfile.txt", 'r') or die("Файл не существует, или вы не обладаете правами на его открытие");

	$line = fgets($fh);
	fclose($fh);
	echo $line;
?>
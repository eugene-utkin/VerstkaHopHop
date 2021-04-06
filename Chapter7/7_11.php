<?php // update.php
	$fh = fopen("testfile.txt", 'r+') or die ("Сбой открытия файла");
	$text = fgets($fh);

	fseek($fh, 0, SEEK_END);
	fwrite($fh, "$text") or die("Сбой записи в файл");
	fclose($fh);

	echo "Файл 'testfile.txt' успешно обновлен";
?>
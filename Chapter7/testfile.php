<?php // testfile.php
	$fh = fopen("testfile.txt", 'w') or die("Создать файл не удалось");

	$text = <<<_END
Строка 1
Строка 2
Строка 3
_END;

	fwrite($fh, $text) or die("Сбой записи файла");
	fclose($fh);
	echo "Файл 'testfile.txt' записан успешно";
?>
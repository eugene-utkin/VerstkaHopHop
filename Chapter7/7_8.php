<?php // copyfile2.php
	if (!copy('testfile.txt', 'testfile2.txt')) echo "Копирование невозможно";
	else echo "Файл успешно скопирован в 'testfile2.txt'";
?>
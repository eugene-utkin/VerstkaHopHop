<?php // movefile.php
	if (!rename('testfile2.txt', 'testfile2.new'))
		echo "Переименование невозможно";
	else echo "Файл успешно переименован в 'testfile.new'";
?>
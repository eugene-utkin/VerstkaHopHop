<?php // deletefile.php
	if (!unlink('testfile2.new')) echo "Удаление невозможно";
	else echo "Файл 'testfile2.new' удален успешно";
?>
<?php // upload.php
	echo <<<_END
		<html><head><title>PHP-форма для загрузки файлов на сервер</title></head><body> <form method='post' action='upload.php' enctype='multipart/form-data'> Выберите файл: <input type='file' name='filename' size='10'> <input type='submit' value='Загрузить'> </form>
_END;

	if ($_FILES)
	{
		$name = $_FILES['filename']['name'];
		move_uploaded_file($_FILES['filename']['tmp_name'], $name);
		echo "Загружаемое изображение '$name'<br><img src='$name'>";
	}

	echo "</body></html>";
?>
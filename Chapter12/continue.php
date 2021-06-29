<?php // continue.php
	session_start();

	if (isset($_SESSION['forename']))
	{
		$forename = $_SESSION['forename'];
		$surname = $_SESSION['surname'];

		echo "С возвращением, $forename.<br>
		Выше полное имя $forename $surname.<br>";
	}
	else echo "Пожалуйста, для входа <a href='authenticate2.php'>щелкните здесь</a>.";
?>
<?php
	session_start();

	if (isset($_SESSION['forename']))
	{
		$forename = $_SESSION['forename'];
		$surname = $_SESSION['surname'];

		destroy_session_and_data();

		echo htmlspecialchars("С возвращением, $forename.<br>
			Ваше полное имя $forename $surname.");
	}
	else echo "Пожалуйста, для входа <a href='authe"
?>
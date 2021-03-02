<?php
	switch ($page)
	{
		case "Home":
			echo "Вы выбрали Home";
			break;
		case "About":
			echo "Вы выбрали About";
			break;
		case "News":
			echo "Вы выбрали News";
			break;
		case "Login":
			echo "Вы выбрали Home";
			break;
		case "Links":
			echo "Вы выбрали Links";
			break;
		default:
			echo "Нераспознанный выбор";
			break;
	}
?>
<?php
	$month = 9;		// Сентябрь (в котором только 30 дней)
	$day = 31;		// 31-е
	$year = 2022;	// 2022

	if (checkdate($month, $day, $year)) echo "Допустимая дата";
	else echo "Недопустимая дата";
?>
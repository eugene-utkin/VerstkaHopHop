<?php
	$temp = "Дата: ";
	echo longdate($temp, time());

	function longdate($text, $timestamp)
	{
		return $text . date("l F jS Y", $timestamp);
	}
?>
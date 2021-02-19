<?php
	$temp = "Дата: ";
	echo longdate($text, time());

	function longdate($text, $timestamp)
	{
		return $text . date("l F jS Y", $timestamp);
	}
?>
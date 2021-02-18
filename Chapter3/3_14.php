<?php
	$temp = "Дата: ";
	echo longdate(time());

	function longdate($timestamp)
	{
		return $temp . date("l F jS Y", $timestamp);
	}
?>
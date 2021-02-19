<?php
	$temp = "Дата: ";
	echo $temp . longdate(time());

	function longdate($timestamp)
	{
		return date("l F jS Y", $timestamp);
	}
?>
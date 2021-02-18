<?php
	function longdate($timestamp)
	{
		$temp = date("l F jS Y", $timestamp);
		return "Дата: $temp";
	}
?>
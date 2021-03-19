<?php
	$temp = new Test();

	echo "Тест А: " . Test::$static_property . "<br>";
	echo "Тест Б: " . $temp->get_sp() . "<br>";
	echo "Тест В: " . $temp->static_property . "<br>";

	class Test
	{
		static $static_property = "Это статическое свойство";

		function get_sp()
		{
			return self::$static_property;
		}
	}
?>
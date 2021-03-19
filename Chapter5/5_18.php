<?php
	class Test
	{
		public $name = "Paul Smith"; // Допустимое
		public $age = 42; // Допустимое
		public $time = time(); // Недопустимое - вызывает функцию
		public $score = $level * 2; // Недопустимое - использует выражение
	}
?>
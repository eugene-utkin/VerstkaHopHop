<?php
	$object = new Tiger():
	echo "У тигров есть...<br>";
	echo "Мех: " . $object->fur . "<br>";
	echo "Полосы: " . $object->stripes;

	class Wildcat
	{
		public $fur; // У диких кошек есть мех
	
		function __construct()
		{
			$this->fur = "TRUE";
		}
	}

	class Tiger extends Wildcat
	{
		public $stripes; // У тигров есть полосы

		function __construct()
		{
			parent::__construct(); // Первоочередной вызов родительского конструктора
			$this->stripes = "TRUE";
		}
	}
?>
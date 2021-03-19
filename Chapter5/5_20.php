<?php
	class Example
	{
		var $name = "Michael"; // Нерекомендуемая форма, аналогичная public
		public $age = 23; // Открытое свойство
		protected $usercount; // Защищенное свойство

		private function admin() // Закрытый метод
		{
			// Сюда помещается код метода admin
		}
	}
?>
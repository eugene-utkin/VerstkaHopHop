<?php
	$object = new User;
	print_r($object);

	class User {
		public $name, $password;

		function save_user()
		{
			echo "Сюда помещается код, сохраняющий данные пользователя";
		}
	}
?>
<?php
	$object = new Son;
	$object->test();
	$object->test2();

	class Dad
	{
		function test()
		{
			echo "[Class Dad] Я твой отец<br>";
		}
	}

	class Son extends Dad
	{
		function test()
		{
			echo "[Class Son] Я Люк<br>";
		}

		function test2()
		{
			parent::test();
		}
	}
?>
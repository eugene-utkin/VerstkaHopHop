<?php
	Translate::lookup();

	class Translate
	{
		const ENGLISH = 0;
		const SPANISH = 1;
		const FRENCH = 3;
		// ...

		static function lookup()
		{
			echo self::SPANISH;
		}
	}
?>
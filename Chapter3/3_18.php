<?php
	static $int = 0;	//Допустимо
	static $int = 1+2;	//Недопустимо (вызовет ошибку синтаксического разбора (Parse error))

	statuc $int = sqrt(144)	//Недопустимо
?>
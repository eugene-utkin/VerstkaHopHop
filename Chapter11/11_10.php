<?php // convert.php
	$f = $c = '';

	if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
	if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

	if (is_numeric($f))
	{
		$c = intval((5 / 9) * ($f - 32));
		$out = "$f &deg;f соответствует $c &deg;c";
	}
	elseif(is_numeric($c))
	{
		$f = intval((9/5) * $c + 32);
		$out = "$c &deg;c equals $f &deg;f";
	}
	else $out = "";

	echo <<<_END
<html>
	<head>
		<title>Программа перевода температуры</title>
	</head>
	<body>
		<pre>
			Введите температуру по Фаренгейту или по Цельсию и нажмите кнопку Перевести

			<b>$out</b>
			<form method="post" action=" ">
				По Фаренгейту 	<input type="text" name="f" size="7">
				По Цельсию 	<input type="text" name="c" size="7">
								<input type="submit" value="Перевести">
			</form>
		</pre>
	</body>
</html>
_END;

	function sanitizeString($var)
	{
		if (get_magic_quotes_gpc())
			$var = stripslashes($var);
			$var = strip_tags($var);
			$var = htmlentities($var);
			return $var;
	}
?>
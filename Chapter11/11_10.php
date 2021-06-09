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

?>
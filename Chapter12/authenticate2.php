<?php // authenticate2.php
	require_once 'login.php';
	$connection = new mysqli($hn, $un, $pw, $db);

	if ($connection->connect_error) die("Fatal Error");

	if (!isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']))
	{
		header('WWW-Authenticate: Basic realm="Restricted Area"');
		header('HTTP/1.0 401 Unauthorized');
		die ("Пожалуйста, введите имя пользователя и пароль");
	}
	$un_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
	$pw_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);
	$query = "SELECT * FROM users WHERE username='$un_temp'";
	if (!$result = $connection->query($query)) {
		die($connection->error);
	}
	if (!$result->num_rows) {
		die("Неверная комбинация имя пользователя - пароль");
	}
	$row = $result->fetch_array(MYSQLI_NUM);
	$result->close();
	if (password_verify($pw_temp, $row[3])) {
		session_start();
		$_SESSION['forename'] = $row[0];
		$_SESSION['surname'] = $row[1];
		echo "$row[0] $row[1] : Привет, $row[0], теперь вы зарегистрированы под именем '$row[2]'";
		die ("<p><a href='continue.php'>Щелкните здесь для продолжения</a></p>");
	}

	$connection->close();
	
	function mysql_entities_fix_string($connection, $string)
	{
		return htmlentities(mysql_fix_string($connection, $string));
	}

	function mysql_fix_string($connection, $string)
	{
		if (get_magic_quotes_gpc()) $string = stripslashes($string);
		return $connection->real_escape_string($string);
	}
?>
<?php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Fatal Error");

	$user = mysql_fix_string($conn, $_POST['user']);
	$pass = mysql_fix_string($conn, $_POST['pass']);
	$query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

	// И т. д.
	function mysql_fix_string($conn, $string)
	{
		if (get_magic_quotes_gpc()) $string = stripcslashes($string);
		return $conn->real_escape_string($string);
	}
?>
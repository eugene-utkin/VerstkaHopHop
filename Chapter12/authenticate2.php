<?php // authenticate2.php
	require_once 'login.php';
	$connection = new mysqli($hn, $un, $pw, $db);

	if ($connection->connect_error) die("Fatal Error");

	if (isset($_SERVER['PHP_AUTH_USER']) &&
		isset($_SERVER['PHP_AUTH_PW']))
	{
		$un_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
		$pw_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);
		$query = "SELECT * FROM users WHERE username='$un_temp'";
		$result = $connection->query($query);

		if (!$result) die("Пользователь не найден");
		elseif ($result->num_rows)
		{
			$row = $result->->fetch_array(MYSQLI_NUM);
			$result->close();
			if (password_verify($pw_temp, $row[3]))
			{
				session_start
			}
		}

			
	}
?>
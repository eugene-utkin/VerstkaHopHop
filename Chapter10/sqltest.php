<?php // sqltest.php
	require_once 'login.php';
	$conn = new musqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Fatal Error");

	if (isset($_POST['delete']) && isset($_POST['isbn']))
	{
		$isbn = get_post($conn, 'isbn');
		$query = "DELETE FROM classics WHERE isbn='$isbn'";
		$result = $conn->query($query);
		if (!$result) echo "Сбой при удалении данных<br><br>";
	}

	if (isset($_POST['author']) 	&&
		isset($_POST['title'])		&&
		isset($_POST['category'])	&&
		isset($_POST['year'])		&&
		isset($_POST['isbn']))
	{
		$author		= get_post($conn, 'author');
		$title		= get_post($conn, 'title');
		$category	= get_post($conn, 'category');
		$year		= get_post($conn, 'year');
		$isbn		= get_post('isbn');
		$query		= "INSERT INTO classics VALUES"	. "('$author', '$title', '$category', '$year', '$isbn')";
		$result
	}
?>
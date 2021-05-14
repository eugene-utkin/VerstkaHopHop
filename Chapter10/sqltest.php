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
	
?>
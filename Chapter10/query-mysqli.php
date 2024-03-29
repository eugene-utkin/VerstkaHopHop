<?php // query-mysqli.php
	require_once 'login.php';
	$connection = new mysqli ($hn, $un, $pw, $db);

	if ($connection->connect_error) die("Fatal Error");

	$query = "SELECT * FROM classics";
	$result = $connection->query($query);

	if (!$result) die ("Fatal Error");

	$rows = $result->num_rows;

	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$result->data_seek($j);
		echo 'Author: '	.htmlspecialchars($result->fetch_assoc()['author']) .'<br>';
		$result->data_seek($j);
		echo 'Title: '	.htmlspecialchars($result->fetch_assoc()['title']) .'<br>';
		$result->data_seek($j);
		echo 'Category: '	.htmlspecialchars($result->fetch_assoc()['category']) .'<br>';
		$result->data_seek($j);
		echo 'Year: '	.htmlspecialchars($result->fetch_assoc()['year']) .'<br>';
		$result->data_seek($j);
		echo 'ISBN: '	.htmlspecialchars($result->fetch_assoc()['isbn']) .'<br><br>';
	}

	$result->close();
	$connection->close();
?>
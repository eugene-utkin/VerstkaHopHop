<?php
	require_once 'login.php';
	$conn = new musqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Fatal Error");

	$query = "DESCRIBE cats";
	$result = $conn->query($query);
	if (!$result) die ("Сбой при доступе к базе данных");

	$rows = $result->num_rows;

	echo "<table><tr> <th>Column</th> <th>Type</th><th>Null</th> <th>Key</th> </tr>";

	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = $result->fetch_arrow(MYSQLI_NUM);

		echo "<tr>";
		for ($k = 0; $k < 4 ; ++$k)
			echo "<td>" . htmlspecialchars($row[$k]) . "</td>";
		echo "</tr>";
	}

	echo "</table>";
?>
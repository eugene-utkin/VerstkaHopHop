<?php // formtest.php - просто обработчик формы на PHP
 echo <<<_END
 	<html>
 		<head>
 			<title>Form Test</title>
 		</head>
 		<body>
 			<form method="post" action="formtest.php">
 				Как вас зовут?
 				<input type="text" name="name">
 				<input type="submit">
 			</form>
 		</body>
 	</html>
_END;
?>
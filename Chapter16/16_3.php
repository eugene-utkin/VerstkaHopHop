<?php // adduser.php
	// Код PHP

	$forename = $surname = $username = $password = $age = $email = "";

	if (isset($_POST['forename']))
		$forename = fix_string($_POST['forename']);
	if (isset($_POST['surname']))
		$surname = fix_string($_POST['surname']);
	if (isset($_POST['username']))
		$username = fix_string($_POST['username']);
	if (isset($_POST['password']))
		$password = fix_string($_POST['password']);
	if (isset($_POST['age']))
		$age = fix_string($_POST['age']);
	if (isset($_POST['email']))
		$email = fix_string($_POST['email']);

	$fail = validate_forename($forename);
	$fail .= validate_surname($surname);
	$fail .= validate_username($username);
	$fail .= validate_password($password);
	$fail .= validate_age($age);
	$fail .= validate_email($email);

	echo "<!DOCTYPE html>\n<html><head><title>Пример формы</title>";

	if ($fail == "")
	{
		echo "</head><body>Проверка формы прошла успешно:
			$forename, $surname, $username, $password, $age, $email.</body></html>";

		// В этом месте отправленные поля будут вводиться в базу данных
		// с предварительным использованием хеш-шифрования для пароля

		exit;

	}

	// Теперь выводится HTML и код JavaScript

	echo <<<_END

	<!-- Раздел HTML и JavaScript -->

	<style>
		.signup {
			border: 1px solid #999999;
			font: normal 14px helvetica;
			color: #444444;
		}
	</style>

	<script>
		function validate(form)
		{
			fail = validateForename(form.forename.value)
			fail += validateSurname(form.surname.value)
			fail += validateSurname(form.surname.value)
		}
	</script>
?>
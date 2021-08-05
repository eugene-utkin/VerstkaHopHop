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
			fail += validateUsername(form.username.value)
			fail += validatePassword(form.password.value)
			fail += validateAge(form.age.value)
			fail += validateEmail(form.email.value)

			if (fail == "") return true
			else { alert(fail); return false }
		}

		function validateForename(field)
		{
			return (field == "") ? "Не введено имя.\\n" : ""
		}

		function validateSurname(field)
		{
			return (field == "") ? "Не введена фамилия.\\n" : ""
		}

		function validateUsername(field)
		{
			if (field == "") return "Не введено имя пользователя.\\n"
			else if (field.length < 5)
				return "В имени пользователя должно быть не менее 5 символов.\\n"
			else if (/[^a-zA-Z0-9_-]/.test(field))
				return "В имени пользователя разрешены только a-z, A-Z, 0-9, - и _.\\n"
			return ""
		}

		function validatePassword(field)
		{
			if (field == "") return "Не введен пароль.\\n"
			else if (field.length < 6)
				return "В пароле должно быть не менее 6 символов.\\n"
			else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field))
				return "Пароль требует 1 символ из каждого набора a-z, A-Z и 0-9.\\n"
			return ""
		}

		function validateAge(field)
		{
			if (isNaN(field)) return "Не введен возраст.\\n"
			else if (field < 18 || field > 110)
				return "Возраст должен быть между 18 и 110.\\n"
			return ""
		}

		function validateEmail(field)
		{
			if (field == "") return "Не введен адрес электронной почты.\\n"
			else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
				return "Электронный адрес имеет неверный формат.\\n"
			return ""
		}
	</script>
	</head>
<body>

	
?>
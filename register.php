<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$errors = array();

if (empty($name)) {
	$errors[] = "El nombre es obligatorio";
}

if (empty($email)) {
	$errors[] = "El correo electrónico es obligatorio";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors[] = "El correo electrónico es inválido";
}

if (empty($password)) {
	$errors[] = "La contraseña es obligatoria";
}

if ($password !== $confirm_password) {
	$errors[] = "Las contraseñas no coinciden";
}

if (empty($errors)) {
	// Registrar el usuario en la base de datos
	// ...

	// Mostrar mensaje de éxito
	echo "Registro exitoso";
} else {
	// Mostrar mensajes de error
	foreach ($errors as $error) {
		echo "<p>$error</p>";
	}
}
?>

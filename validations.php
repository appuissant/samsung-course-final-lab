<?php
class validations
{
	static function validateFirst($field)
	{
		if (empty($field)) {
			return "Por favor, ingresa tu nombre";
		} else if (strlen($field) > 20) {
			return "El nombre no puede contener más de 20 caracteres";
		} else {
			return "";
		}
	}
	static function validateLast($field)
	{
		if (empty($field)) {
			return "Por favor, ingresa tu apellido";
		} else if (strlen($field) > 20) {
			return "El apellido no puede contener más de 20 caracteres";
		} else {
			return "";
		}
	}
	static function validateEmail($field)
	{
		if (empty($field)) {
			return "Por favor, ingresa tu email";
		} else if (strlen($field) > 50) {
			return "El email no puede contener más de 50 caracteres";
		} else if (!filter_var($field, FILTER_VALIDATE_EMAIL)) {
			return "Por favor, ingresa un email válido";
		} else {
			return "";
		}
	}
	static function validateUser($field)
	{
		if (empty($field)) {
			return "Por favor, ingresa un usuario";
		} else if (strlen($field) > 20) {
			return "El usuario no puede contener más de 20 caracteres";
		} else {
			return "";
		}
	}
	static function validatePassword($field)
	{
		if (empty($field)) {
			return "Por favor, ingresa una contraseña";
		} else if (strlen($field) < 4) {
			return "La contraseña no puede contener menos de 4 caracteres";
		} else if (strlen($field) > 8) {
			return "La contraseña no puede contener más de 8 caracteres";
		} else {
			return "";
		}
	}

	static function validations($first, $last1, $last2, $email, $user, $password){
		$errors = validations::validateFirst($first) . " ";
		$errors .= validations::validateLast($last1) . " ";
		$errors .= validations::validateLast($last2) . " ";
		$errors .= validations::validateEmail($email) . " ";
		$errors .= validations::validateUser($user) . " ";
		$errors .= validations::validatePassword($password);
		return trim($errors);
	}
}
?>
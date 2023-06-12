<?php
require("db_actions.php");
require("validations.php");

function createUser()
{
	if ($_POST) {
		$first = $_POST["first"];
		$last1 = $_POST["last1"];
		$last2 = $_POST["last2"];
		$email = $_POST["email"];
		$user = $_POST["user"];
		$password = $_POST["password"];

		$db_actions = new db_actions();

		if ($db_actions->connectionSuccess() === true) {

			$validations = validations::validations($first, $last1, $last2, $email, $user, $password);

			if (empty($validations)) {
				$query = $db_actions->setInsertQuery($first, $last1, $last2, $email, $user, $password);

				if ($db_actions->connection->query($query) === true) {
					echo '<script>
					alert("Registro completado con éxito");
					document.getElementById("form").reset();
				</script>';
				} else {
					echo "Error: " . $query . "<br/>" . $db_actions->connection->error;
				}
			} else {
				echo '<script>
					alert("Error al crear el usuario: ' . $validations . '");
			</script>';
			}
		}

		$db_actions->connection->close();
	}
}
?>
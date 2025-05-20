<?php 
function procesarEmailFormulario() {
	$email=$_POST['email'] ?? '';

	 if ($email) {
		echo "Email '". htmlspecialchars($email) . "' recibido con éxito (no se guarda)
		} 
	else {
		echo "Por favor, envia un email en el parametro $email via POST. (ejemplo: kml@kml.com)";
		}
	}
}

if ($_SERVER["REQUEST_METHOD"=='POST']) {
	procesarEmailFormulario();
	die();
}
?>
<form method="POST">
	<input type="email" name="email" placeholder="tu.email@ejemplo.com" required>
	<button type="submit">Enviar Email</button>
</form>


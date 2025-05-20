<?php 
/**
 * Verificador de email en PHP
 *
 * Codigo en PHP demo para el examen de mayo de  DAW, para GIT.
 *
 * @author    Kamal Majaiti El Majaiti
 * @copyright © 2025 Kamal Majaiti El Majaiti. Licenciado bajo CC BY-SA 4.0
 * @license   https://creativecommons.org/licenses/by-sa/4.0/ Creative Commons Attribution-ShareAlike 4.0
 * @link      https://github.com/kmajaiti011j/mayo25
 * @version   1.0
 * @since     PHP 5.6
 */


/**
 * Funcion que procesa el formulario de Email de solicitud HTTP POST.
 *
 * Esta función permite realizar probar el email que se ha recibido por POST al servidor web.
 *
 * @example
 * procesarEmailFormulario();
 * die();
 */


function procesarEmailFormulario() {
	$email=$_POST['email'] ?? '';

	 if ($email) {
		echo 'Email '. htmlspecialchars($email) . ' recibido con éxito (no se guarda)';
		} 
	else {
		echo 'Por favor, envia un email en el parametro $email via POST. (ejemplo: kml@kml.com)';
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


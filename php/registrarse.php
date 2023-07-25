<?php




include_once 'config.php';
include_once 'encriptado.php';
include_once 'limpieza.php';
	#name service api
	#-> apache2handler -> navegador
	#-> Common gateway interface
	#->cli -> consola
	#-> Common Line Interface
if (php_sapi_name() !== 'apache2handler') {
	die("no puedes abrirlo desde la consola");
}

$nombre = limpiarCaracteres($_POST['nombre']);
$_POST['Nombre'];
$usuario = limpiarCaracteres($_POST['user']);
$correo =limpiarCaracteres($_POST['correo']);
$pswd = encriptar(limpiarCaracteres($_POST['pswd']));
if (!$conn -> connect_error) {
	$sql = "INSERT INTO usuarios(nombre, usuario, pswd, mail) VALUES('$nombre', '$usuario', '$correo', 'pswd')";
	if ($conn -> query($sql) === TRUE) {
		header("Location: ../html/login.html");
	}else{
		header("Location: ../index.php");
	}
}
$conn -> close();

?>
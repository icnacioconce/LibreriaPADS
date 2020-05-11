<?php
session_name();
session_start();
include 'conexion.php';
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];

$Resultado=mysqli_query($Conexion, "SELECT * FROM `usuarios` WHERE nombre = '$nombre' AND contrasena = '$clave'");
if (mysqli_num_rows($Resultado)==1) {echo '<br>Bienvenido';
	$_SESSION["nombre"] = "$nombre";

	echo '<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php">';

}else{
	echo '<br><b>Usuario no reconocido';
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=login.php">';
}

?>
<?php
include 'conexion.php';
$nombre  = $_POST["nombre"];
$nick    = $_POST["nick"];
$correo  = $_POST["correo"];
$clave   = $_POST["clave"];

$Insertar = "INSERT INTO `usuarios`(`nombre`, `nick`, `correo`, `contrasena`) VALUES ('$nombre','$nick','$correo','$clave')";
$Resultado = mysqli_query($Conexion, $Insertar);
if (!$Resultado){
echo "Ha ocurrido un error con el registro";
echo '<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=registro.php">';
}else{
	
	echo "Tus datos se registraron exitosamente";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=login.php">';
}

?>
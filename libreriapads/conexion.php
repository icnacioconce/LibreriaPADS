<?php
$Conexion = mysqli_connect("localhost", "libreriapads", "545725365", "libreriapads");
if (!$Conexion){
echo "Erro al conectar con la base de datos";
}else {
	echo "Conexion con la base exitosa";
}
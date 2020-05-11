<?php
session_start();
$var = $_SESSION['nombre'];

if($var == null || $var = ''){
	echo'NO TIENES AUTORIZACIÓN';
	die();
}
?>
<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8"/>
		<title>Librerias Pads | Pagina Oficial</title>
		<link rel="stylesheet" type="text/css" href="css/publicoestilos.css">
		<link rel="stylesheet" type="text/css" href="css/menu">
		<link rel="Icon" href="imagenes/iconopads.ico">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Iceland|Josefin+Sans&display=swap" rel="stylesheet">
	</head>
	<body>

		<header>
			<a href="index.php"><img id="logo" src="imagenes/logopads2.png"><span>Libreria PADS</span></a>
			<a href="index.php" id="home" class="icon-home"></a>
		</header>
		<?php 
				if (isset($_SESSION["nombre"])) {
					echo '<br><h1>'.$_SESSION["nombre"].'</h1>';
				}?>

		<center><h1>LIBROS DE DOMINIO PUBLICO DISPONIBLES</h1></center>
		<section id = "galeria">
			<div class = "libros"><a href="imagenes/dominio/pdfs/libro1.pdf"><img class = "portada" src = "imagenes/dominio/libros/libro1.png"></a></div>
			<div class = "libros"><a href="imagenes/dominio/pdfs/libro2.pdf"><img class = "portada" src = "imagenes/dominio/libros/libro2.png"></a></div>
			<div class = "libros"><a href="imagenes/dominio/pdfs/libro3.pdf"><img class = "portada" src = "imagenes/dominio/libros/libro3.png"></a></div>
			<div class = "libros"><a href="imagenes/dominio/pdfs/libro4.pdf"><img class = "portada" src = "imagenes/dominio/libros/libro4.png"></a></div>
			<div class = "libros"><a href="imagenes/dominio/pdfs/libro5.pdf"><img class = "portada" src = "imagenes/dominio/libros/libro5.png"></a></div>
		</section>
</body>
</html>
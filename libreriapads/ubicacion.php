<!DOCTYPE html>
<?php 
session_start();
 ?>
<html lang="es">

	<head>
		<meta charset="utf-8"/>
		<title>Librerias Pads | Pagina Oficial</title>
		<link rel="stylesheet" type="text/css" href="css/ubicacionestilos.css">
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

		<center>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d238988.27223753912!2d-103.3516527!3d20.6210394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99fe2cdb8fd74794!2sLibrer%C3%ADas%20Gandhi!5e0!3m2!1ses-419!2smx!4v1575933307987!5m2!1ses-419!2smx" width="80%" height="1000px;" frameborder="1px" style="border:#000000;" allowfullscreen=""></iframe>
		</center>
	</body>
	</html>
<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8"/>
		<title>Librerias Pads | Pagina Oficial</title>
		<link rel="stylesheet" type="text/css" href="css/registroestilos.css">
		<link rel="stylesheet" type="text/css" href="css/menu">
		<link rel="Icon" href="imagenes/iconopads.ico">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Iceland|Josefin+Sans|Montserrat&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<a href="index.php"><img id="logo" src="imagenes/logopads2.png"><span>Libreria PADS</span></a>
			<a href="index.php" id="home" class="icon-home"></a>
		</header>


		<center>
		<h1>REGISTRATE</h1>
		<form id="formulario"  action="registrar.php" method="post">
			<div class="texto">Nombre:</div><div><input class="cuadro" type="text" placeholder="Nombre" name="nombre"></div>
			<div class="texto">Nickname:</div><div><input class="cuadro" type="text" placeholder="Nickname" name="nick"></div>
			<div class="texto">Correo:</div><div><input class="cuadro" type="text" placeholder="Correo" name="correo"></div>
			<div class="texto">Contraseña:</div><div><input class="cuadro" type="password" placeholder="Contraseña" name="clave"></div>
			<div><input id="sub" type="submit" value="Registrar"></div>
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		</center>
	</body>
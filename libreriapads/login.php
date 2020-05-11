<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8"/>
		<title>Librerias Pads | Pagina Oficial</title>
		<link rel="stylesheet" type="text/css" href="css/loginestilos.css">
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
		<h1>INGRESA A TU CUENTA</h1>
		<form id="formulario"  action="loguear.php" method="post">
			<div class="texto">Nombre:</div><div><input class="cuadro" type="text" placeholder="&#128272 Nombre" name="nombre"></div>
			<div class="texto">Contraseña:</div><div><input class="cuadro" type="password" placeholder="&#128272 Contraseña" name="clave"></div>
			<div><input id="sub" type="submit" value="Ingresar"></div>
		</form>
		<br>
		<div id="r"><a id="enlace" href="registro.php">Registrate</a><span id="enlace2"> sí aún no tienes una cuenta</span></div>
		</center>
	</body>
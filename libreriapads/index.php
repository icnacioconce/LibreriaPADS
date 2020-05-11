<!DOCTYPE html>
<?php 
session_start();
 ?>
<html lang="es">

	<head>
		<meta charset="utf-8"/>
		<title>Librerias Pads | Pagina Oficial</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/menu">
		<link rel="Icon" href="imagenes/iconopads.ico">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Iceland|Josefin+Sans&display=swap" rel="stylesheet">
	</head>
	




	<body>
		<header>
				<div id = "cuenta" align=right>
					<?php
					if (isset($_SESSION["nombre"])) {echo'
					<input type="checkbox" id="menu-bar"><label id="lmenu" class="icon-menu" for="menu-bar"></label>
					<div class="menu">
						<a href="index.php">Libros</a>
						<a href="publico.php">Dominio Publico</a>
						<a href="ubicacion.php">Ubicación</a>
						<a href="#">Atención a Clientes</a>
					</div>';
					}else{echo'
					<input type="checkbox" id="menu-bar"><label id="lmenu" class="icon-menu" for="menu-bar"></label>
					<div class="menu">
						<a href="index.php">Libros</a>
						<a href="ubicacion.php">Ubicación</a>
					</div>';

					}
					?>

			<?php 
				if (isset($_SESSION["nombre"])) {echo '<br><a id="cerrar" href="cerrar_sesion.php">Cerrar Sesion</a><span id="user" >Hola:'.$_SESSION["nombre"].'</span>';
				}else{
				echo '<div id = "lcuenta"><a id="login" href="login.php"><span id = "textito">Cuenta</span><span class="icon-user"></a></div>';
				}
			?>

			</div>
			<center>
				<img id = "logo" src = "imagenes/logopads2.png">
			</center>

			<center>
			<section id = "buscador">
				<div class = "elementos" id = "barratam"><input id="barra" type="text" name="buscador" placeholder="Busca libros o autores"></div>
				<div class = "elementos" id = "lupa"><span class="icon-search"></span></div>
			</section>
			</center>
		</header>


		<nav>
			<ul>
				<li><div class = "opciones"><a href="index.php"><span class="icon-book"></span>Libros</a></div></li>
				
				<?php if (isset($_SESSION["nombre"])) {echo '<li><div class = "opciones"><a href="publico.php"><span class="icon-books"></span>Dominio Publico</a></div></li>';}?>
				
				<li><div class = "opciones"><a href="ubicacion.php"><span class="icon-location"></span>Ubicación</a></div></li>
				
				<?php if (isset($_SESSION["nombre"])) {echo '<li><div class = "opciones"><a href="#"><span class="icon-question"></span>Atención a Clientes</a></div></li>';}?>
			</ul>
		</nav>

		<div class = "slider">
			<ul>
				<li> <img src="imagenes/autores/autor1.png" alt = "autor1"></li>
				<li> <img src="imagenes/autores/autor2.png" alt = "autor2"></li>
				<li> <img src="imagenes/autores/autor3.png" alt = "autor3"></li>
				<li> <img src="imagenes/autores/autor4.png" alt = "autor4"></li>
				<li> <img src="imagenes/autores/autor5.png" alt = "autor5"></li>
				<li> <img src="imagenes/autores/autor6.png" alt = "autor6"></li>	
			</ul>
		</div>

		<section id = "pagina">
		<div><center>Pagina 1</center></div>
		</section>

		<section id = "galeria">
			<div class = "libros"><a href="Paginas/El-esclavo.php"><img class = "portada" src = "imagenes/libros/libro1.png"></a></div>
			<div class = "libros"><a href="Paginas/El-lobo-estepario.php"><img class = "portada" src = "imagenes/libros/libro2.png"></a></div>
			<div class = "libros"><a href="Paginas/El-llano-en-llamas.php"><img class = "portada" src = "imagenes/libros/libro3.png"></a></div>
			<div class = "libros"><a href="Paginas/Pedro-paramo.php"><img class = "portada" src = "imagenes/libros/libro4.png"></a></div>
			<div class = "libros"><a href="Paginas/It.php"><img class = "portada" src = "imagenes/libros/libro5.png"></a></div>
			<div class = "libros"><a href="Paginas/Partials-la-conexion.php"><img class = "portada" src = "imagenes/libros/libro6.png"></a></div>
			<div class = "libros"><a href="Paginas/50-sombras-de-grey.php"><img class = "portada" src = "imagenes/libros/libro7.png"></a></div>
			<div class = "libros"><a href="Paginas/Rayuela.php"><img class = "portada" src = "imagenes/libros/libro8.png"></a></div>
			<div class = "libros"><a href="Paginas/Diario_de_Greg1.php"><img class = "portada" src = "imagenes/libros/libro9.png"></a></div>
			<div class = "libros"><a href="Paginas/Diario_de_Greg2.php"><img class = "portada" src = "imagenes/libros/libro10.png"></a></div>
			<div class = "libros"><a href="Paginas/Diario_de_Greg3.php"><img class = "portada" src = "imagenes/libros/libro11.png"></a></div>
			<div class = "libros"><a href="Paginas/Diario_de_Greg4.php"><img class = "portada" src = "imagenes/libros/libro12.png"></a></div>
			<div class = "libros"><a href="Paginas/Diario_de_Greg5.php"><img class = "portada" src = "imagenes/libros/libro13.png"></a></div>
			<div class = "libros"><a href="Paginas/Diario_de_Greg6.php"><img class = "portada" src = "imagenes/libros/libro14.png"></a></div>
			<div class = "libros"><a href="Paginas/Diario_de_Greg7.php"><img class = "portada" src = "imagenes/libros/libro15.png"></a></div>
		</section>

		<footer id = "fondo">
			<h3>Creada por:</h3><h1>Julio González</h1>
			<div id = "redes">
				<div class = "red"><a href="http://www.twitter.com"><img class = "logoredes" src="imagenes/twitterlogo.png"></a></div>
				<div class = "red"><a href="http://www.instagram.com"><img class = "logoredes" src="imagenes/instagramlogo.png"></a></div>
				<div class = "red"><a href="http://www.facebook.com"><img class = "logoredes" src="imagenes/facebooklogo.png"></a></div>
			</div>
        </footer>
	</body>
<!--blur: true;        		overlay:true;-->
</hmtl>
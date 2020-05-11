<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Librerias Pads | Diario de Greg 4. Dias de perros</title>
	<link rel="stylesheet" type="text/css" href="../css/ubicacionestilos.css">
	<link rel="stylesheet" type="text/css" href="../css/menu">
	<link rel="Icon" href="../imagenes/iconopads.ico">
	<link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Iceland|Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<a href="../index.php"><img id="logo" src="../imagenes/logopads2.png"><span>Libreria PADS</span></a>
		<a href="../index.php" id="home" class="icon-home"></a>
	</header>
	
	<div>
		<p>
				<a href="../imagenes/libros/libro12.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro12.png" alt="Diario de Greg4"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					Diario de Greg 4. Dias de perros
				</h1>
			</div>
		</div>
	</div>
	
	<div>
		<h2>
			Autor: 	Jeff Kinney
		</h2>
		<h2>
			Editorial: OCEANO TRAVESIA 
		</h2>
	</div>

	<br>
	<br>

	<div> 
		<h2>Sinopsis</h2>
		<span>
			Son las vacaciones de verano, hace un tiempo padrísimo y todos los chicos se la pasan en grande al aire libre. ¿y dónde está Greg Heffley? Encerrado en casa, con las cortinas cerradas, jugando con sus videojuegos. Greg, que reconoce ser una persona a la que le gusta estar en casa, vive sus vacaciones de verano soñadas: sin obligaciones y sin reglas. Pero su mamá tiene una idea muy diferente de lo que debe ser un verano perfecto más relacionado con actividades al aire libre y planes con la familia. ¿Cuál de las dos visiones será la que se imponga? ¿Será posible que una nueva incorporación a la familia Heffley lo cambie todo? La serie ha sido aclamada por la prensa internacional y ha ocupado el no. 1 en ventas en la lista de the new york times. un género único en su clase, basado en el humor y en una fórmula triunfadora. -Publishers Weekly diario de Greg amenaza con conquistar al mundo. -time una de las series juveniles de mayor éxito de todos los tiempos. -Washington post
		</span>
	</div>

	<br>
	<br>

	<div>
		<h2>
			Comentarios
		</h2>
	</div>
	<br>

	<div>
		<form name="agenda" method="POST" action="Diario_de_Greg4.php">

        <p>

            <label>Nombre:</label>
            <input id="cajas" type="text" name="nombre" required>
            <label>Contenido:</label>
            <input id="cajas" type="text" name="contenido" required>

        </p>
        <input id="agregar" type="submit" name="enviar" value="Agregar Comentario">

        </form>
        <table>
        <?php

                if(!$contactos = simplexml_load_file('Diario_de_Greg4_comentarios.xml')){
                    echo "No se ha podido cargar el archivo";
                } else {
                    foreach($contactos as $contacto){
                        echo '<tr>';

                        $name = $contacto -> nombre;
                        echo '<td>'.$name.'</td>';

                        $contenido = $contacto -> contenido;
                        echo '<td>'.$contenido.'</td>';

                        echo '</tr>';
                    }
                }
        ?>

        </table>
        <?php
            if(isset($_POST['enviar'])){
                $nombre = $_POST['nombre'];
                $contenido = $_POST['contenido'];

                $doc = new domDocument("1.0", "utf-8");
                $doc -> formatOutput = true;
                $doc -> load("Diario_de_Greg4_comentarios.xml");

                $raiz = $doc -> getElementsByTagName("contactos") -> item(0);
                $rama = $doc -> createElement('contacto');

                $hoja = $doc -> createElement('nombre');
                $hoja -> appendChild($doc -> createTextNode($nombre));

                $rama -> appendChild($hoja);
                $hoja = $doc -> createElement('contenido');
                $hoja -> appendChild($doc -> createTextNode($contenido));

                $rama -> appendChild($hoja);
                $raiz -> appendChild($rama);

                $doc -> appendChild($raiz);
                $doc -> save("Diario_de_Greg4_comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Diario_de_Greg4.php"';
            }
        ?>
	</div>
</body>

</html>
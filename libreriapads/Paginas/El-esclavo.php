<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Librerias Pads | El Esclavo</title>
	<link rel="stylesheet" type="text/css" href="../css/ubicacionestilos.css">
	<link rel="stylesheet" type="text/css" href="../css/menu">
	<link rel="Icon" href="../imagenes/iconopads.ico">
	<link href="https://fonts.googleapis.com/css?family=Cherry+Swash|Iceland|Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
	<form name="comentarios" method="POST" action="El-esclavo.php">

	<header>
		<a href="../index.php"><img id="logo" src="../imagenes/logopads2.png"><span>Libreria PADS</span></a>
		<a href="../index.php" id="home" class="icon-home"></a>
	</header>

	<div>
		<p>
				<a href="../imagenes/libros/libro1.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro1.png" alt="El Esclavo"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					El Esclavo
				</h1>
			</div>
		</div>
	</div>

	<div>
		<h2>
			Autor: Francisco J. Ángel
		</h2>
		<h2>
			Editorial: El Camino Rojo Ediciones
		</h2>
	</div>

	<br>
	<br>

	<div>
		<h2>Sinopsis</h2>
		<span>
			En esta novela el autor Francisco nos narra su propia historia. Comienza cuando despierta en una habitación del hospital, se da cuenta que todos a su alrededor no lo pueden oír por más que el grite, ni mover por más esfuerzo que realice.  Con el tiempo se da cuenta de que un accidente causó el estado en el que está.

			Pasan meses, los doctores y su familia ya no tienen esperanza en que pueda volver a despertar. Durante este tiempo él aprende bastantes cosas, y es que el está inmóvil pero su mente no. También se da cuenta de que su familia no es la causa de todos sus problemas, a base de palabras y de sinceridad sus seres queridos le demuestran cuánto lo aman en verdad y él comprende el amor verdadero en la familia.

			Él quiere seguir con su vida normal, tras intentos fallidos de dejarlo morir consigue despertar. Conoce a su hija, que estuvo esperando con ansias durante su estado de coma.
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
		<form name="agenda" method="POST" action="El-esclavo.php">

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

                if(!$contactos = simplexml_load_file('El-esclavo-comentarios.xml')){
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
                $doc -> load("El-esclavo-comentarios.xml");

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
                $doc -> save("El-esclavo-comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=El-esclavo.php"';
            }
        ?>
	</div>


</body>

</html>

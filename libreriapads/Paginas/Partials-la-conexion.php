<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Librerias Pads | Paertials La Conexion</title>
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
				<a href="../imagenes/libros/libro6.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro6.png" alt="IT"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					Partials La Conexion
				</h1>
			</div>
		</div>
	</div>
	
	<div>
		<h2>
			Autor: Dan Wells
		</h2>
		<h2>
			Editorial: V&R
		</h2>
	</div>

	<br>
	<br>

	<div> 
		<h2>Sinopsis</h2>
		<span>
			Nuestro tiempo se acaba. La humanidad está a punto de desaparecer. En 2076, en un mundo devastado por la guerra, los seres humanos están al borde de la extinción y la clave de la supervivencia está en manos de una chica de 16 años. La humanidad esta a punto de desaparecer tras haber perdido la guerra con los Parciales (seres creados con tecnología genética, idénticos a nosotros). Los humanos sobrevivientes fueron reducidos a unos pocos miles por el RM, un virus letal utilizado como arma biológica, al cual solo parte de la población es inmune. Los habitantes se concentraron en Long Island y, aunque los Parciales se han retirado misteriosamente, su amenaza persiste. Pero lo peor de todo es que en 11 años no ha habido un solo bebé que haya sobrevivido al RM. Kira Walker, una estudiante de medicina de 16 a los, se encuentra en la línea de fuego de esta batalla. Es testigo de los estragos que causa el RM y también de las leyes de embarazo obligatorio, que han llevado a la ciudad a las puertas de una guerra civil. En esta desesperada búsqueda por salvar la continuidad de su raza, Kira descubrirá que la supervivencia de humanos y Parciales dependerá de sus esfuerzos por comprender la conexión entre ambos, algo que el mundo ha olvidado...o quizás, nunca supo que existía. En el camino develará varios misterios y un secreto que va más allá de las luchas por el poder, el control y la conservación. ¿Rebeldía u obediencia? ¿Autoritarismo o revolución? La respuesta parece ser una sola: libertad. Pero ¿a qué precio?.
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
		<form name="agenda" method="POST" action="Partials-la-conexion.php">

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

                if(!$contactos = simplexml_load_file('Partials-la-conexion-comentarios.xml')){
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
                $doc -> load("Partials-la-conexion-comentarios.xml");

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
                $doc -> save("Partials-la-conexion-comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Partials-la-conexion.php"';
            }
        ?>
	</div>
</body>

</html>
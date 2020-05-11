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
	<header>
		<a href="../index.php"><img id="logo" src="../imagenes/logopads2.png"><span>Libreria PADS</span></a>
		<a href="../index.php" id="home" class="icon-home"></a>
	</header>
	
	<div>
		<p>
				<a href="../imagenes/libros/libro4.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro4.png" alt="Pedro paramo"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					Pedro Paramo
				</h1>
			</div>
		</div>
	</div>
	
	<div>
		<h2>
			Autor: Juan Rulfo
		</h2>
		<h2>
			Editorial: I'M
		</h2>
	</div>

	<br>
	<br>

	<div> 
		<h2>Sinopsis</h2>
		<span>
			Pedro Páramo es una de las obras maestras de la literatura hispanoamericana. La novela cuenta cómo el protagonista, Juan Preciado, va en busca de su padre, Pedro Páramo, hasta el pueblo mexicano de Comala, un lugar vacio, misterioso, sin vida. Allí, el joven descubrirá que toda la gente del pueblo se llama Páramo, que muchos de ellos son sus propios hermanos, y que Pedro Páramo está muerto. Estamos, pues, ante una novela misteriosa y fantástica cuya atmósfera envuelve al lector y los transporta a un territorio mágico de sorprendentes ramificaciones.
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
		<form name="agenda" method="POST" action="Pedro-paramo.php">

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

                if(!$contactos = simplexml_load_file('Pedro-paramo-comentarios.xml')){
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
                $doc -> load("Pedro-paramo-comentarios.xml");

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
                $doc -> save("Pedro-paramo-comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Pedro-paramo.php"';
            }
        ?>
	</div>
</body>

</html>
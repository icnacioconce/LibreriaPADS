<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Librerias Pads | Diario de Greg 2. La ley de Rodrick</title>
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
				<a href="../imagenes/libros/libro10.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro10.png" alt="Diario de Greg2"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					Diario de Greg 2. La ley de Rodrick
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
			Mejor no preguntarle a Greg Heffley qué tal la pasó durante las vacaciones de verano, porque no quiere ni oír hablar del asunto. De hecho, al empezar el nuevo curso Greg está deseando olvidar los últimos tres meses de su vida, en particular cierto acontecimiento... Por desgracia para él, su hermano mayor, Rodrick, lo sabe todo sobre ese incidente que él querría enterrar para siempre. Y es que todos los secretos acaban saliendo a la luz... Sobre todo cuando hay un diario de por medio. La primera novela de esta serie, Diario de Greg. Un renacuajo, recibió críticas favorables de la prensa de todo el mundo y además fue Nº 1 en ventas en la lista de The New York Times.
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
		<form name="agenda" method="POST" action="Diario_de_Greg2.php">

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

                if(!$contactos = simplexml_load_file('Diario_de_Greg2_comentarios.xml')){
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
                $doc -> load("Diario_de_Greg2_comentarios.xml");

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
                $doc -> save("Diario_de_Greg2_comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Diario_de_Greg2.php"';
            }
        ?>
	</div>
</body>

</html>
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
				<a href="../imagenes/libros/libro2.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro2.png" alt="El Esclavo"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					El Lobo Estepario
				</h1>
			</div>
		</div>
	</div>
	
	<div>
		<h2>
			Autor: Hermann Hesse
		</h2>
		<h2>
			Editorial: Selector
		</h2>
	</div>

	<br>
	<br>

	<div> 
		<h2>Sinopsis</h2>
		<span>
			Encrucijada de todas las obsesiones e intuiciones de HERMANN HESSE (1887-1962) y exponente de su singular talento para el relato, EL LOBO ESTEPARIO se inscribe dentro del empeño, patente a lo largo de toda su obra, por iluminar la zona oscura de la condición humana a fin de poner al descubierto su carga trágica y su incierto destino. Ser solitario e incomunicado, extraño y extrañado, Harry Haller, protagonista de esta emblemática novela, ha acabado convirtiéndose en un arquetipo literario en el que se reconocen quienes padecen los devastadores efectos deshumanizadores de una sociedad insolidaria y atomizada.
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
		<form name="agenda" method="POST" action="El-lobo-estepario.php">

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

                if(!$contactos = simplexml_load_file('El-lobo-estepario-comentarios.xml')){
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
                $doc -> load("El-lobo-estepario-comentarios.xml");

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
                $doc -> save("El-lobo-estepario-comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=El-lobo-estepario.php"';
            }
        ?>
	</div>
</body>

</html>
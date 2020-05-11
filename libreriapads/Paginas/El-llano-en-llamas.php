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
				<a href="../imagenes/libros/libro3.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro3.png" alt="El llano en llamas"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					El Llano en Llamas
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
			El "Llano en llamas" es hoy un clásico de la literatura mexicana e hispanoamericana, y probablemente uno de los volúmenes de cuentos más traducido a otros idiomas en el mundo entero. Obra aparentemente sencilla resulta, sin embargo, profundamente desconcertante. En su unidad formal descansa una gran diversidad de lenguajes, registros y tonos con los que Rulfo aborda la problemática de una violencia multiforme —desembozada unas veces, insidiosa otras—, hasta tal punto naturalizada que ha dejado de reconocerse como tal. Sin embargo, el autor no la "refleja" ni la "denuncia", ni tampoco la pone en escena: la persigue hasta sus repliegues más recónditos, compenetrándose con el sentir de quienes la ejercen o la padecen, sin alcanzar a reconocerla las más de las veces. O más precisamente: antes que la violencia misma, lo que los cuentos de "El Llano en llamas" ponen en escena suele ser ese oscuro y confuso bregar con su impronta en el sentir de quienes se vieron alguna vez envueltos en ella, sin advertir entonces su verdadero rostro.
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
		<form name="agenda" method="POST" action="El-llano-en-llamas.php">

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

                if(!$contactos = simplexml_load_file('El-llano-en-llamas-comentarios.xml')){
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
                $doc -> load("El-llano-en-llamas-comentarios.xml");

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
                $doc -> save("El-llano-en-llamas-comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=El-llano-en-llamas.php"';
            }
        ?>
	</div>
</body>

</html>
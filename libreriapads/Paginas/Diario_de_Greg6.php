<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Librerias Pads | Diario de Greg 6. ¡Sin salida!</title>
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
				<a href="../imagenes/libros/libro14.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro14.png" alt="Diario de Greg6"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					Diario de Greg 6. ¡Sin salida!
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
			Greg Heffley está en problemas. Alguien ha vandalizado el colegio, y Greg es el principal sospechoso. Aunque, por primera vez, es inocente... O algo parecido. Parece que la policía anda tras la pista de Greg, pero una tormenta de nieve inesperada deja encerrada a la familia Heffley en casa. Greg sabe que cuando la nieve se derrita le tocará dar explicaciones, pero... ¿hay algún castigo peor que quedarse atrapado en casa con la familia en vacaciones? 
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
		<form name="agenda" method="POST" action="Diario_de_Greg6.php">

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

                if(!$contactos = simplexml_load_file('Diario_de_Greg6_comentarios.xml')){
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
                $doc -> load("Diario_de_Greg6_comentarios.xml");

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
                $doc -> save("Diario_de_Greg6_comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Diario_de_Greg6.php"';
            }
        ?>
	</div>
</body>

</html>
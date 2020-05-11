<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Librerias Pads | Diario de Greg. Un renacuajo</title>
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
				<a href="../imagenes/libros/libro9.png"><img style="width: 12.5em; height: 20em"  src="../imagenes/libros/libro9.png" alt="Diario de Greg1"></a>
		</p>
	</div>

	<div>
		<div>
			<div>
				<h1>
					Diario de Greg. Un renacuajo
				</h1>
			</div>
		</div>
	</div>
	
	<div>
		<h2>
			Autor: Jeff Kinney
		</h2>
		<h2>
			Editorial: Molino
		</h2>
	</div>

	<br>
	<br>

	<div> 
		<h2>Sinopsis</h2>
		<span>
			Greg hefley es un joven que estudia en la escuela, pero el comenzara a escribir lo que le sucede en su día a día, esto por que su madre se lo pidió.
			
			El nos narra sobre su familia, el tiene dos hermanos, el mayor Rodrick el cual es muy cruel con Greg, y Manny, el mas pequeño que es tratado como un rey por sus padres...

			El tiene un amigo lado Rowley, un chico bastante inocente pero que es su mejor amigo. Así que Greg tendrá la meta de triunfar en su escuela, para ser famoso de adulto.
		</span>
	</div>

	<br>
	<br>
<div> 
		<h2>Sinopsis</h2>
		<span>
			Cuando la estudiante de literatura Anastasia Steele recibe el encargo de entrevistar al exitoso y joven empresario Christian Grey, queda impresionada al encontrarse ante un hombre atractivo, seductor y también muy intimidante. La inexperta e inocente Ana intenta olvidarle, pero pronto comprende cuánto le desea.

			Grey está atormentado por sus propios demonios y le consume la necesidad de controlarlo todo, aunque a su vez se ve incapaz de resistirse a la serena belleza de Ana, a su inteligencia y a su espíritu independiente. Debe admitir que la desea, pero bajo ciertas condiciones.

			Cuando la pareja inicia por fin una apasionada relación, las peculiares prácticas sexuales de Grey desconciertan a Ana, al tiempo que ella descubre los límites de sus propios y más oscuros deseos.
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
		<form name="agenda" method="POST" action="Diario_de_Greg1.php">

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

                if(!$contactos = simplexml_load_file('Diario_de_Greg1_comentarios.xml')){
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
                $doc -> load("Diario_de_Greg1_comentarios.xml");

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
                $doc -> save("Diario_de_Greg1_comentarios.xml");

                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Diario_de_Greg1.php"';
            }
        ?>
	</div>
</body>

</html>
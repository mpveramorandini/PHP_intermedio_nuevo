<?php

// echo '<pre>';
// print_r($_FILES['archivo']);
// echo '<pre>';

// Se obtiene la ruta temporal del archivo subido y su nombre.
$temporal = $_FILES['archivo']['tmp_name'];
$nombre = $_FILES['archivo']['name'];

// move_uploaded_file($temporal, 'imagenes/'.$nombre);


//Abrir la foto original
// Se crea una imagen a partir del archivo subido. Si es JPEG, se utiliza imagecreatefromjpeg(),
// y si es PNG, se utiliza imagecreatefrompng(). Si no es ninguno de los dos, se muestra un mensaje de error.

if ($_FILES['archivo']['type'] == 'image/jpeg') {
    $original = imagecreatefromjpeg($temporal);
} elseif ($_FILES['archivo']['type'] == 'image/png') {
    $original = imagecreatefrompng($temporal);
} else {
    die('no se pudo generar la imagen');
}

// Se obtienen las dimensiones (ancho y alto) de la imagen original.
$ancho_original = imagesx($original);
$alto_original = imagesy($original);

//Crear lienzo vacio
// Se define el ancho deseado para la nueva imagen y se calcula el alto correspondiente manteniendo la proporción.
$ancho_nuevo = 700;

$alto_nuevo = round($ancho_nuevo * $alto_original / $ancho_original);

// Se crea una nueva imagen en blanco (lienzo vacío) con las dimensiones calculadas.
$copia = imagecreatetruecolor( $ancho_nuevo, $alto_nuevo);

//copiar original --->
// Se copia y redimensiona la imagen original en la nueva imagen.
imagecopyresampled($copia, $original, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, $ancho_original, $alto_original);

//exportar/guardar imagen
// Se guarda la nueva imagen redimensionada en el directorio "imagenes/" con el mismo nombre.
imagejpeg($copia, "imagenes/" . $nombre, 100);


// Se liberan los recursos de memoria utilizados por las imágenes original y redimensionada.
imagedestroy($original);
imagedestroy($copia);

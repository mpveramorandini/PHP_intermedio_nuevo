<?php
session_start();

header("Content-type:image/jpeg");

$imagen_captcha = imagecreate(80, 40);

$fondo = imagecolorallocate($imagen_captcha, 239, 192, 240);
$texto = imagecolorallocate($imagen_captcha, 82, 4, 34);

imagestring($imagen_captcha, 5, 15, 5, $_SESSION['codigo_captcha'], $texto);

// imagestring($imagen_captcha, 5, 15, 5, 'QRDF' , $texto);

imagejpeg($imagen_captcha);


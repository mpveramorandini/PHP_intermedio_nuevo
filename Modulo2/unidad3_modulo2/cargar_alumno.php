<?php
session_start();
include("conexion.php");
$codigo_captcha=$_POST['captcha'];

if ($codigo_captcha == $_SESSION['codigo_captcha']) {
    $nombre_alumno = $_POST["nombre"];
    $apellido_alumno = $_POST["apellido"];
    $imagen_alumno = $_POST["imagen"];
    $descripcion_alumno = $_POST["descripcion"];

    mysqli_query($conexion_db, "INSERT INTO alumnos VALUES (DEFAULT,'$nombre_alumno','$apellido_alumno','$imagen_alumno', '$descripcion_alumno')");

    mysqli_close($conexion_db);

    header("Location:cargar.php?ok");
} else {
    header("Location:cargar.php?error_codigo");
}


//<?php
// session_start();
// include("conexion.php");
// $codigo_captcha = $_POST['captcha'];

// if ($codigo_captcha == $_SESSION['codigo_captcha']) {

//     $nombre_alumno = $_POST["nombre"];
//     $apellido_alumno = $_POST["apellido"];
//     $imagen_alumno = $_POST["imagen"];
//     $descripcion_alumno = $_POST["descripcion"];

//     mysqli_query($conexion_db, "INSERT INTO alumnos VALUES (DEFAULT,'$nombre_alumno','$apellido_alumno','$imagen_alumno', '$descripcion_alumno')");

//     mysqli_close($conexion_db);

//     header("Location:cargar.php?ok");
// } else {
//     header("Location:cargar.php?error_codigo");
// }
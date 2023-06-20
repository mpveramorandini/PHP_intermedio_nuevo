<?php 
session_start();

$nombre_alumno=$_POST["nombre"];
$apellido_alumno=$_POST["apellido"];
$imagen_alumno=$_POST["imagen"];
$descripcion_alumno=$_POST["descripcion"];

include("conexion.php");

mysqli_query($conexion_db, "INSERT INTO alumnos VALUE(DEFAULT,'$nombre_alumno','$apellido_alumno','$imagen_alumno', '$descripcion_alumno')");

mysqli_close($conexion_db);

header("Location:cargar.php?ok");

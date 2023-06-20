<?php
include("conexion.php");

$id_alumno = $_GET['id'];

mysqli_query($conexion_db ,"UPDATE alumnos SET estado ='en proceso', estado= 'finalizado' WHERE id=$id_alumno");

header("Location: ver_alumno.php");



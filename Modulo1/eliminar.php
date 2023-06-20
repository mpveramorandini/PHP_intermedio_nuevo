<?php
include("conexion.php");

$id_alumno=$_GET['id'];

mysqli_query($conexion_db ,"DELETE FROM alumnos WHERE id=$id_alumno");

header('Location:ver_alumno.php');

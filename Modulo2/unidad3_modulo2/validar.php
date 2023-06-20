<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

include('conexion.php');

// $consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = 'admin' AND clave='admin123' ");

// if ($usuario == 'admin' && $clave == 'admin123'){
//     $_SESSION['admin'] = $_POST['usuario'];
//     header('Location:cargar.php');
// } else {
//     header('Location:index.php?error');
// }


$consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = '$usuario' AND clave = '$clave';");

if (mysqli_num_rows($consulta) == 0) {
    header('Location:index.php?error');
} else {
    $_SESSION['admin'] = $_POST['usuario'];
    header('Location:cargar.php');
}


// <?php
// session_start();
// $usuario = $_POST['usuario'];
// $clave = $_POST['clave'];

// include('conexion.php');

// $consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = 'admin' AND clave = 'admin123' ");

// if ($usuario == 'admin' && $clave == 'admin123'){
//     $_SESSION['admin']== $_POST['usuario'];
//     header('Location: cargar.php');
// } else {
//     header('Location: index.php?error');
// }

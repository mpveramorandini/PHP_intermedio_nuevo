<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


include('conexion.php');

$consulta = mysqli_query($conexion_db, "SELECT * FROM usuarios WHERE usuario = '18123456' AND clave = 'admin12'or
  usuario = '20123456' AND clave = 'admin13'");

if ($usuario == '18123456' && $clave == 'admin12' ||$usuario == '20123456' && $clave == 'admin13' ){
    $_SESSION ["usuario"] = $_POST['usuario'];
    header('Location: mostrar_contenido.php');
} else {
    header('Location: index.php?error');
}






// Error: MySQL shutdown unexpectedly.
// 06:49:06  [mysql] 	This may be due to a blocked port, missing dependencies, 
// 06:49:06  [mysql] 	improper privileges, a crash, or a shutdown by another method.
// 06:49:06  [mysql] 	Press the Logs button to view error logs and check
// 06:49:06  [mysql] 	the Windows Event Viewer for more clues
// 06:49:06  [mysql] 	If you need more help, copy and post this
// 06:49:06  [mysql] 	entire log window on the forums


// <?php
// session_start();
// $usuario = $_POST['usuario'];
// $clave = $_POST['clave'];


// include('conexion.php');

// $consulta = mysqli_query($conexion_db, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave';");

// if (mysqli_num_rows($consulta) == 0) {
//   header('Location:index.php?error');
// } else {
//   $_SESSION['admin'] = $_POST['usuario'];
//   header('Location:mostrar_contenido.php');
// } 

 <?php
session_start();
include("conexion.php");
$codigo_captcha = $_POST['captcha'];

if ($codigo_captcha == $_SESSION['codigo_captcha']) {
    $nombre_alumno = $_POST["nombre"];
    $apellido_alumno = $_POST["apellido"];
    // $imagen_alumno = $_POST["imagen"];
    $descripcion_alumno = $_POST["descripcion"];
    $estado_alumno = $_POST["estado"];


    $nombre_img = $_FILES['imagen']['name'];
    $tamanio_img = $_FILES['imagen']['size'];
    $tipo_img = $_FILES['imagen']['type'];
    $tmp_img = $_FILES['imagen']['tmp_name'];




    $destino = 'imagenes/'. $nombre_img;

    if (($tipo_img != "image/jpeg" &&  $tipo_img != "image/jpg" &&  $tipo_img != "image/png" &&  $tipo_img != "image/gif") or $tamanio_img >400000) {
        header("Location: cargar.php?error");
    } else {
        move_uploaded_file($tmp_img, $destino);
        mysqli_query($conexion_db, "INSERT INTO alumnos VALUES (DEFAULT,'$nombre_alumno','$apellido_alumno','$nombre_img', '$descripcion_alumno', '$estado_alumno')");
        header("Location:cargar.php?ok");
    }
} else {
    header("Location:cargar.php?error_codigo");
}
mysqli_close($conexion_db);






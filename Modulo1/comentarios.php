<?php include("header.php")
?>

<div class="comentario">
<?php 
$fecha_actual= date("jS \of F Y h:i:s A");
echo "<p>La fecha actual es:  $fecha_actual</p>";


$texto=
// " <h4> Nombre: " . $_POST ["nombre"] 
//  . " Apellido: " . $_POST ["apellido"]
//  . " Comentario: " . $_POST ['msj'] . "</h4>"

" <h4> Nombre: " . $_POST ["nombre"] ."</h4>"
 . " <h4> Apellido: " . $_POST ["apellido"] . "</h4>"
 . "<h4> Comentario: " . $_POST ['msj'] . "</h4>"
 . "<h5>" . " Fecha de comentario: " . $fecha_actual . "</h5>";

$archivo = fopen("comentario.txt", "a");
fputs($archivo, $texto);

echo "<p>Comentarios guardados!</p>"

?>
</div>

<?php include("footer.php")
?>

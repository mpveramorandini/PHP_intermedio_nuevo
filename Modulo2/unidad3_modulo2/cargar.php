
<?php
session_start();
if(isset($_SESSION['admin'])){

  include("header.php");

  //Codigo captcha
  $nro1 = rand(0, 9);
  $nro2 = rand(0, 9);
  $nro3 = rand(0, 9);
  $letra = array('a', 'h', 'g', 'd', 'm', 'k');
  $simbolo = array('#', '$', '&', '$', '/', '@');
  $mezcla_letra = rand(0, 5);
  $mezcla_simbolo = rand(0, 5);


  $_SESSION['codigo_captcha']= $nro1.$letra[$mezcla_letra].$nro1.$simbolo[$mezcla_simbolo]. $nro3;
?>

<div class="contacto">
  <h2>Completar el siguiente Formulario</h2>
  <form action="cargar_alumno.php" method="post" class="formulario">
    <p>
      <input type="text" name="nombre" placeholder="Nombre">
    </p>

    <p>
      <input type="text" name="apellido" placeholder="Apellido">
    </p>
    <p>
      <input type="img" name="imagen" placeholder="Imagen">
    </p>
    <p>
      <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
    </p>
    <img src="captcha.php" alt="captcha">
    <p>
      <input type="text" name="captcha" placeholder="Ingresa captcha">
    </p>
    <p>
      <input type="submit" name="" id="" value="Enviar">
    </p>
  </form>
</div>


<?php

  if (isset($_GET['error_codigo'])) {
    echo "<h3>Código de verificación incorrecto</h3>";
  }
  if (isset($_GET['ok'])) {
    echo "<h3> Mensaje enviado con exito </h3>";
  }
}
?> 

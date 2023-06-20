<?php include("header.php")
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
                        <p>
                        <input type="submit" name="" id="" value="Enviar">
                        </p>
                    </form>
 </div> 




<?php 
if(isset($_GET['ok'])){
  echo "<h3> Mensaje enviado con exito </h3>";
}
?>

</body>
<?php include("footer.php")
?>

</html>

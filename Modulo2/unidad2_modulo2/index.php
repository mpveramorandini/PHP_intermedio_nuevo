<?php include("header.php")
?>


<div class="contacto">
                    <h2>Ingreso</h2>
                    <form action="validar.php" method="post" class="formulario">
                        <p>
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        </p>

                        <p>
                        <label for="clave">Clave</label>  
                        <input type="password" name="clave" placeholder="Clave" required pattern="[A-Za-z0-9!?-]{8,12}">
                        </p>
                    
                        <p>
                        <input type="submit" name="" id="" value="Ingresar">
                        </p>
                    </form>
 </div> 




<?php 
if(isset($_GET['error'])){
  echo "<h3> Datos incorrectos </h3>";
}
?>

</body>


</html>

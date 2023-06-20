<?php include("header.php")
?>

<body>
<div class="contacto">
                    <h2>bienvenido</h2>
                    <form action="validar.php" method="post" class="formulario">
                        <p>
                        <label for="usuario">Ingrese su DNI</label>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        </p>

                        <p>
                        <label for="clave">Clave</label>  
                        <input type="password" name="clave" placeholder="Clave">
                        </p>
                    
                        <p>
                        <input type="submit" name="" id="" value="Ingresar">
                        </p>
                    </form>
 </div> 




<?php 
if(isset($_GET['error'])){
  echo "<h3> Para acceder a esta seccion debe ingresar como cliente </h3>";
}


?>

</body>


</html>

<?php include("header.php")
?>


<div class="comentarios">
                    <h2>deje sus comentarios</h2>
                    <form action="comentarios.php" method="post" class="formulario">
                        <p>
                        <input type="text" name="nombre" placeholder="Nombre">
                        </p>

                        <p>
                        <input type="text" name="apellido" placeholder="Apellido">
                        </p>
                        
                        <p>
                        <textarea name="msj"  cols="30" rows="10"></textarea>
                        </p>
                        <p>
                        <input type="submit" id="" value="Enviar">
                        </p>
                    </form>
 </div>  



 <?php include("footer.php")
?>

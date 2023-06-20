<?php include("header.php")
?>
<section class="contenedor_alumno">
    <?php
    include("conexion.php");





    $consulta_db = mysqli_query($conexion_db, "SELECT * FROM alumnos");

    while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
    ?>

        <div class="caja_alumnos">
            <h3><?php echo $mostrar_datos["nombre"] ." ". $mostrar_datos["apellido"]; ?></h3>
            <img src="imagenes/<?php echo $mostrar_datos["imagen"]?>" alt="<?php echo $mostrar_datos["nombre"]?>">

            <p>
                <?php echo $mostrar_datos['descripcion'];?>
            </p> 
            <a href="eliminar.php?id=<?php echo $mostrar_datos ["id"]?>"> <input type="submit" name="" class="eliminar" value="Eliminar"></a>

        </div>
    <?php }?>
</section>

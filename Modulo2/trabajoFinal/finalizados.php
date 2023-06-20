<?php include("header.php");
session_start();?>

<section class="contenedor_alumno">
    <?php include("conexion.php");

    $consulta_db = mysqli_query($conexion_db, "SELECT * FROM alumnos WHERE estado = 'finalizado'");
  

    while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
    ?>

        <div class="caja_alumnos">
            <h3><?php echo $mostrar_datos["nombre"] ." ". $mostrar_datos["apellido"]; ?></h3>
            <img src="imagenes/<?php echo $mostrar_datos["imagen"]?>" alt="<?php echo $mostrar_datos["nombre"]?>">

            <p>
                <?php echo $mostrar_datos['descripcion'];?>
            </p> 
            <h3>Estado: <?php echo $mostrar_datos['estado']?></h3>

            <a href="editar_estado.php?id= <?php echo $mostrar_datos['id']; ?>"> <p> Finalizar Carga </p></a>

            <a href="eliminar.php?id=<?php echo $mostrar_datos ["id"]; ?>"> <p> Eliminar </p></a>

        </div>
    <?php }?>
</section>


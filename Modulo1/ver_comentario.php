<?php include("header.php")
?>
<div class=coment>
<?php ;
$archivo = fopen("comentario.txt", "r");
echo fread($archivo, 10000); 
?>
</div>
 
</body>
<?php include("footer.php")
?>

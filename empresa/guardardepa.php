<?php
	include 'conexion.php';

	$id=$_GET['no'];


$consulta= "SELECT * from departamentos";

      $nombre=$_POST['nombre'];



			$sentencia=mysqli_query($conexion, "UPDATE departamentos SET  nombre= '$nombre' WHERE id='$id'");


?>

<script type="text/javascript">
	alert("Modificado exitosamente");
window.location.href='indexdepa.php';
</script>

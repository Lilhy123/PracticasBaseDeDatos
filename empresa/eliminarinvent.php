<?php
	include "conexion.php";

  $id=$_GET['no'];


		$sentencia="DELETE FROM inventario WHERE id='$id'";
	$result=mysqli_query($conexion, $sentencia);

?>

<script type="text/javascript">
	alert(" Eliminado exitosamente");
	window.location.href='indexinvent.php';
</script>

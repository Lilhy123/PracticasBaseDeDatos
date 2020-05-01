<?php
	include "conexion.php";

  $id=$_GET['no'];

	
		$sentencia="DELETE FROM empleados WHERE id='$id'";
	$result=mysqli_query($conexion, $sentencia);

?>

<script type="text/javascript">
	alert(" Eliminado exitosamente");
	window.location.href='index.php';
</script>

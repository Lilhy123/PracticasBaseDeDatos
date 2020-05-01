<?php
	include "conexion.php";

  $id=$_GET['no'];


		$sentencia="DELETE FROM departamentos WHERE id='$id'";
	$result=mysqli_query($conexion, $sentencia);

?>

<script type="text/javascript">
	alert(" Eliminado exitosamente");
	window.location.href='indexdepa.php';
</script>

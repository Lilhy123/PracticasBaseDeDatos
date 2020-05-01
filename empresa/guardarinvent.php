<?php
	include 'conexion.php';

	$id=$_GET['no'];


$consulta= "SELECT * from inventario";

      $producto=$_POST['producto'];
      $precio=$_POST['precio'];
			$cantidad=$_POST['cantidad'];


			$sentencia="UPDATE inventario SET  producto= '$producto', precio='$precio', cantidad='$cantidad' WHERE id='$id'";
				$result=mysqli_query($conexion, $sentencia);

?>

<script type="text/javascript">
	alert("Modificado exitosamente");
window.location.href='indexinvent.php';
</script>

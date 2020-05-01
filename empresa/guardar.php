<?php
	include 'conexion.php';

	$id=$_GET['no'];


$consulta= "SELECT * from empleados";

      $nombre=$_POST['nombre'];
      $edad=$_POST['edad'];
			$correo=$_POST['correo'];
			$salario=$_POST['salario'];
			$id_departamento=$_POST['id_departamento'];

			$sentencia="UPDATE empleados SET  nombre= '$nombre', edad='$edad', correo='$correo', salario='$salario', id_departamento='$id_departamento' WHERE id='$id'";
				$result=mysqli_query($conexion, $sentencia);


?>

<script type="text/javascript">
	alert("Modificado exitosamente");
	window.location.href='index.php';
</script>

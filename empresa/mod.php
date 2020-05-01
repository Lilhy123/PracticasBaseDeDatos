<?php
	include 'conexion.php';

	modificarempleado($_POST['id'], $_POST['nombre'], $_POST['edad'],  $_POST['correo'],   $_POST['salario'],   $_POST['id_departamento']);

	function modificarempleado($id, $nom, $ed, $co,$sal,$id_depa)
	{
		$sentencia="UPDATE productos SET  nombre= '".$nom."', edad='".$ed."', correo= '".$co."', salario= '".$sal."', departamento= '".$id_depa."' WHERE id='".$id."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert(" Modificado exitosamente");
	window.location.href='index.php';
</script>

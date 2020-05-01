<?php

	$conexion=mysqli_connect('localhost','root','','empresa');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
</head>
<body>

<br>

	<table border="5" >
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Edad</td>
			<td>Corre</td>
			<td>Salario</td>
			<td>Id Departamento</td>
			<td>Eliminar</td>
		</tr>

		<?php
		$sql="SELECT * from empleados";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['salario'] ?></td>
			<td><?php echo $mostrar['id_departamento'] ?></td>
		</tr>

	<?php
	}
	 ?>
	</table>
	<br>
	<FORM NAME="buttonbar">
	<INPUT TYPE="button" VALUE="Volver" onClick="history.back()">
	</FORM>
</body>
</html>

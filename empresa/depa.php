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
		</tr>

		<?php
		$sql="SELECT * from departamentos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
		</tr>
	<?php
	}
	 ?>
	</table>

</body>
</html>

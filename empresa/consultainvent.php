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
			<td>Producto</td>
			<td>Precio</td>
			<td>Cantidad</td>
		</tr>

		<?php
		$sql="SELECT * from inventario";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['producto'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
				<td><?php echo $mostrar['cantidad'] ?></td>
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

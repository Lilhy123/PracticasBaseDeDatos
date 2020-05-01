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
	    <td>Producto</td>
			<td>Cantidad</td>

		</tr>
		<?php
    echo "PRODUCTO CON MAYOR EXISTENCIA";
		$sql="SELECT * from inventario order by cantidad desc limit 1";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
      <td><?php echo $mostrar['producto'] ?></td>
				<td><?php echo $mostrar['cantidad'] ?></td>

		</tr>
	<?php
	}
	 ?>
	</table>

	<br>

		<table border="5" >
			<tr>
		    <td>Producto</td>
				<td>Cantidad</td>

			</tr>
			<?php
	    echo "PRODUCTO CON MENOR EXISTENCIA";
			$sql="SELECT * from inventario order by cantidad asc limit 1";

			$result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
			 ?>
			<tr>
	      <td><?php echo $mostrar['producto'] ?></td>
					<td><?php echo $mostrar['cantidad'] ?></td>

			</tr>
		<?php
		}
		 ?>
		</table>


		<br>

			<table border="5" >
				<tr>
					<td>Producto</td>
					<td>Cantidad</td>
				</tr>
				<?php
				echo "PRODUCTO SIN EXISTENCIA";
				$sql="SELECT * FROM inventario WHERE (cantidad =0)";
				$result=mysqli_query($conexion,$sql);
				while($mostrar=mysqli_fetch_array($result)){
				 ?>
				<tr>
					<td><?php echo $mostrar['producto'] ?></td>
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

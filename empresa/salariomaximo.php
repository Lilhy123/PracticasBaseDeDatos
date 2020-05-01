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


 		<tr>

 		</tr>
 		<?php
     echo "SALARIO MAXIMO<br>";
 		$sql="SELECT * from empleados order by salario desc limit 1";
 		$result=mysqli_query($conexion,$sql);
 		while($mostrar=mysqli_fetch_array($result)){
 		 ?>
 		<tr>
       <td><?php echo $mostrar['nombre'] ?></td>
 				<td><?php echo $mostrar['salario'] ?></td>
				<br>

 		</tr>
 	<?php
 	}
 	 ?>
 	</table>


		</tr>
		<?php
		echo "<br>SALARIO MINIMO<br>";
		$sql="SELECT * from empleados order by salario asc limit 1";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
				<td><?php echo $mostrar['salario'] ?></td>
<br>
		</tr>
	<?php
	}

	 ?>
	</table>

<?php
$consulta= mysqli_query($conexion, "SELECT salario FROM empleados;") or die("error");
$suma=0;
$con=0;
while($elemento=mysqli_fetch_array($consulta)){
	$suma=$suma+$elemento['salario'];
	$con++;
}
$prom=$suma/$con;

echo "<br>SALARIO PROMEDIO: <br>$prom";


echo '<br>';

echo "<br>SALARIO DEBAJO DEL PROMEDIO:<br>";

$consulta="SELECT * FROM empleados WHERE salario<$prom";
$resultado=mysqli_query($conexion, $consulta);
while ($mostrar = mysqli_fetch_array( $resultado )){

	echo $mostrar['nombre']; echo'    ';
	echo $mostrar['salario']; echo'<br>';
}



echo "<br>SALARIO POR ENCIMA DEL PROMEDIO:<br>";
$consulta="SELECT * FROM empleados WHERE salario>$prom";
$resultado=mysqli_query($conexion, $consulta);
while ($mostrar = mysqli_fetch_array( $resultado )){

	echo $mostrar['nombre']; echo'    ';
	echo $mostrar['salario']; echo'<br>';
}

?>
<br>
<FORM NAME="buttonbar">
<INPUT TYPE="button" VALUE="Volver" onClick="history.back()">
</FORM>



</body>
</html>

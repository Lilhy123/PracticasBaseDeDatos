<?php
include 'conexion.php';
  $id=$_GET['no'];

  $sentencia="SELECT * FROM empleados WHERE id='$id'";
  $result=mysqli_query($conexion, $sentencia);
  $mostrar=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Modificar</title>
<style type="text/css">
</style>

</head>
<body >
<div class="todo">
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar</h1> </span>
  		<br>
	  <form action="guardar.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

      <input type="hidden" name="id" value="<?php echo $_GET['no']?> ">

  		<label>Empleado: </label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo $mostrar['nombre'] ?>"><br>

      <label>Edad:</label>
      <input type="text" id="edad" name="edad" value="<?php echo  $mostrar['edad'] ?>"><br>

      <label>Correo:</label>
      <input type="text" id="correo" name="correo" value="<?php echo  $mostrar['correo'] ?>"><br>

      <label>Salario:</label>
      <input type="text" id="salario" name="salario" value="<?php echo $mostrar['salario'] ?>"><br>

      <label>No. Departamento:</label>
      <input type="text" id="id_departamento" name="id_departamento" value="<?php echo $mostrar['id_departamento'] ?>"><br>


  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
      <br>
      <FORM NAME="buttonbar">
      <INPUT TYPE="button" VALUE="Volver" onClick="history.back()">
      </FORM>
     </form>
  	</div>

  </div>

	<div id="footer">
  	</div>

</div>


</body>
</html>

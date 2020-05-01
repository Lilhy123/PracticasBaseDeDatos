<?php
include 'conexion.php';
  $id=$_GET['no'];

  $sentencia="SELECT * FROM departamentos WHERE id='$id'";
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
	  <form action="guardardepa.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

      <input type="hidden" name="id" value="<?php echo $_GET['no']?> ">

  		<label>Nombre: </label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo $mostrar['nombre'] ?>"><br>



  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
      <br>

     </form>
  	</div>

  </div>

	<div id="footer">
  	</div>

</div>


</body>
</html>

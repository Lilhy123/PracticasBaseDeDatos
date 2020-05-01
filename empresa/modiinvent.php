<?php
include 'conexion.php';
  $id=$_GET['no'];

  $sentencia="SELECT * FROM inventario WHERE id='$id'";
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
	  <form action="guardarinvent.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

      <input type="hidden" name="id" value="<?php echo $_GET['no']?> ">

  		<label>Producto: </label>
  		<input type="text" id="producto" name="prodcuto" value="<?php echo $mostrar['producto'] ?>"><br>

      <label>Precio: </label>
      <input type="text" id="precio" name="precio" value="<?php echo $mostrar['precio'] ?>"><br>

      <label>Cantidad: </label>
      <input type="text" id="cantidad" name="cantidad" value="<?php echo $mostrar['cantidad'] ?>"><br>




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

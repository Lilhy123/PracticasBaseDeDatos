
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo de interaccion con DB</title>
  <style type="text/css">
  @import url("css/mycss.css");
  </style>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body bgcolor="">
<div class="todo">

  <div id="cabecera">
    	<img src="images/swirl.png" width="1188" id="img1">
    </div>
  <div id="contenido">
  	<table style="margin: auto; width: 550px; border-collapse: separate; border-spacing: 15px 20px;">
  		<thead>
  			<th>Id</th>
  			<th>Producto</th>
        <th>Precio</th>
  			<th>Cantidad</th>



  		<?php
			include 'conexion.php';

      $sentencia="SELECT * from inventario";
      $result=mysqli_query($conexion,$sentencia);

      while($mostrar=mysqli_fetch_array($result)){

        echo "<tr>";
        echo "<td>"; echo $mostrar['id']; echo "</td>";
        echo "<td>"; echo $mostrar['producto']; echo "</td>";
        echo "<td>";echo $mostrar['precio']; echo "</td>";
        echo "<td>";echo $mostrar['cantidad']; echo "</td>";

        echo "<td>  <a href='modiinvent.php?no=".$mostrar['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
        echo "<td>  <a href='eliminarinvent.php?no=".$mostrar['id']."'> <button type='button' class='btn btn-success'>Eliminar</button> </a> </td>";



      }



      ?>
  	</table>
<button type="submit" class="btn btn-success"><a href="PRINCIPAL.html">VOLVER</a></button>

  </div>

  <div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>

<?php

$conectar=@mysqli_connect('localhost','root','');

if (!$conectar) {
echo "No se conecto a la base de datos";
}
if (!mysqli_select_db($conectar,'empresa')){
echo"no se encontro la base de datos";
}

$producto=$_POST['producto'];
$precio =$_POST['precio'];
$cantidad =$_POST['cantidad'];



$sql ="INSERT INTO inventario(Producto, Precio, cantidad) VALUES ('$producto','$precio', '$cantidad')";

if (!mysqli_query($conectar,$sql)) {
echo "Hay algun error";
}
else{
echo "Datos almacenados correctamente<br><a href='PRINCIPAL.html'>atras</a>";
}
?>

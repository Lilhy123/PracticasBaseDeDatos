 <?php

$conectar=@mysqli_connect('localhost','root','');

if (!$conectar) {
echo "No se conecto a la base de datos";
}
if (!mysqli_select_db($conectar,'empresa')){
echo"no se encontro la base de datos";
}

$nombre=$_POST['nombre'];
$edad =$_POST['edad'];
$correo = $_POST['correo'];
$salario =$_POST['salario'];


$sql ="INSERT INTO empleados(nombre,edad, correo, salario) VALUES ('$nombre','$edad','$correo','$salario')";

if (!mysqli_query($conectar,$sql)) {
echo "Hay algun error";
}
else{
echo "Datos almacenados correctamente<br><a href='PRINCIPAL.html'>atras</a>";
}

?>

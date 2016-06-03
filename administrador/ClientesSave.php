<?php
$id=$_POST["txtid"];
$nombre=$_POST["txtnombre"];
$paterno=$_POST["txtpaterno"];
$materno=$_POST["txtmaterno"];
$direccion=$_POST["txtdireccion"];

$conexion = new mysqli("localhost","root","","puntoventa");
if (mysqli_connect_errno($conexion))
{
  	echo "Error: Conexion: " . mysqli_connect_error();
} 
else 
{ 
	$result = mysqli_query($conexion, "INSERT INTO clientes values($id,'$nombre', '$paterno', '$materno', '$direccion')")or die ("Error en el SQL");
	echo "Informacion almacenada";
}
?>
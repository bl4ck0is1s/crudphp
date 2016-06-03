<?php
//seccion de indicadores

$id=$_POST["txtid"];
$nVentas=$_POST["txtNVentas"];
$pro_ventas=$_POST["txtProVen"];
$tot_ventas=$_POST["txtTotVentas"];

$conexion = new mysqli("localhost","root","","puntoventa");
if (mysqli_connect_errno($conexion))
{
  	echo "Error: Conexion: " . mysqli_connect_error();
} 
else 
{ 
	$result = mysqli_query($conexion, "INSERT INTO indicadores values($id,$nVentas, $pro_ventas, $tot_ventas)")or die ("Error en el SQL");
	echo "Informacion almacenada";
}
?>
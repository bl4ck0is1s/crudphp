
<?php
$id_venta=$_POST["txtidVenta"];
$nom_producto=$_POST["txtProducto"];
$precio=$_POST["txtPrecio"];
$num_productos=$_POST["txtNProduc"];
$cantidad=$_POST["txtCantidad"];

$conexion = new mysqli("localhost","root","","puntoventa");
if (mysqli_connect_errno($conexion))
{
  	echo "Error: Conexion: " . mysqli_connect_error();
} 
else 
{ 
	$result = mysqli_query($conexion, "INSERT INTO ventas values($id_venta,'$nom_producto', '$precio', '$num_productos', '$cantidad')")or die ("Error en el SQL");
	echo "Informacion almacenada";
}
?>
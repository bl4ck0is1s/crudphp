<?php
$usuario=$_POST["txtusu"];
$password=$_POST["txtpas"];

$conexion = new mysqli("localhost","root","","puntoventa");
if (mysqli_connect_errno($conexion))
{
  	echo "Error: Conexion: " . mysqli_connect_error();
} 
else 
{ 
	$resultInsertar = mysqli_query($conexion, "INSERT INTO usuarios (id, usuario, password, tipo_usuario) values ($usuario, '$usuario', '$password','cajero') ")or die ("Error en el SQL");
	echo "Usuario Registrado";
}
?>
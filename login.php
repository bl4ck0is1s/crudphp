<?php
//inicio de php
$usuario=$_POST["txtusu"];
$password=$_POST["txtpas"];

$conexion = new mysqli("localhost","root","","puntoventa");
if (mysqli_connect_errno($conexion))
{
  	echo "Error: Conexion: " . mysqli_connect_error();
} 
else 
{ 
	$result = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='$usuario' and password='$password'")or die ("Error en el SQL");
	if(($nfilas= mysqli_num_rows($result))>0)
	{
		$datos= mysqli_fetch_assoc($result);
		$tipo= $datos["tipo_usuario"];

		if($tipo=="adm")
			header ("location: ./administrador/index_administrador.php"); 
		else
			header ("location: ./cajeros/index_cajeros.php"); 
	}
	else
		echo "Error: No se encontro el usuario";	


}

$conexion->close();
//fin de php
?>
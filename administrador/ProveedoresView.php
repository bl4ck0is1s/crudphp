
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<table width="750px" border="1" bgcolor="66cccc">
 			<tr>
 				<th width="70px">Id</th>
 				<th width="100px">Nombre</th>
 				<th width="100px">ApellidoP</th>
 				<th width="100px">ApellidoM</th>
 				<th width="100px">Direccion</th>
 				
 			</tr>
 				<?php 
 						$conexion = new mysqli("localhost","root","","puntoventa");
							if (mysqli_connect_errno($conexion))
							{
  								echo "Error: Conexion: " . mysqli_connect_error();
							} 
							else 
							{ 
							$resultProv = mysqli_query($conexion, "SELECT * FROM proveedores")or die ("Error en el SQL");
								if(($nfilas =mysqli_num_rows($resultProv))>0)
								{
									while ($filaProv=mysqli_fetch_assoc($resultProv)) 
									{
										//termina el codigo php porque despues va un codigo html
										?>
										<tr>
											<td><?php echo $filaProv["id"]; ?></td>
											<td><?php echo $filaProv["nombre"]; ?></td>
											<td><?php echo $filaProv["paterno"] ?></td>
											<td><?php echo $filaProv["materno"] ?></td>
											<td><?php echo $filaProv["direccion"]; ?></td>
										</tr>

										 <?php
										 //vuelve abrir el codigo php
									}
								}
								else
								{
									?>
									<tr>
											<td colspan="3">No han registrado provedores</td>
									</tr>
									<?php
								}
							}
	 				 ?>
 				<tr>
 				<th>&nbsp;</th>
 				<th>&nbsp;</th>
 				<th>&nbsp;</th>
 				<th>&nbsp;</th>
 				<th>&nbsp;</th>
 				
 			</tr>
 		</table>	
 </body>
 </html>
<?php 
	
 ?>

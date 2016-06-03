<HTML>
	<HEAd>
		<link rel="stylesheet" href="../css/EstiloPlantilla.css"/>
		<link rel="stylesheet" href="../css/animated-menu.css"/>
		<script src="../js/jquery-1.3.js" type="text/javascript"></script>
		<script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="../js/animated-menu.js" type="text/javascript"></script>

		<script>
		$(document).ready(function(){
			$("#enlaceUsuarios").click(function(evento){
    			evento.preventDefault();
      			$("#destino").load("UsuariosRegistrar.php", { }, function(){
      			});
   			});

   			$("#enlaceProveedores").click(function(evento){
    			evento.preventDefault();
      			$("#destino").load("ProveedoresView.php", { }, function(){
      			});
   			});

   			$("#enlaceClientes").click(function(evento){
    			evento.preventDefault();
      			$("#destino").load("ClientesRegistrar.php", { }, function(){
      			});
   			});

   			$("#enlaceVentas").click(function(evento){
    			evento.preventDefault();
      			$("#destino").load("VentaRegistrar.php", { }, function(){
      			});
   			});


   			$("#enlaceIndicadores").click(function(evento){
    			evento.preventDefault();
      			$("#destino").load("IndicadoresRegistrar.php", { }, function(){
      			});
   			});

   				$("#enlaceMostrar").click(function(evento){
    			evento.preventDefault();
      			$("#destino").load("mostrarProductos.php", { }, function(){
      			});
   			});

		}) 
		</script>

	</HEAD>
	<BODY bgcolor="#e0e00e">
		<div class="banner">

		</div>
		<div class="main">
			
			<ul>
				<li class="red">
					<p><a href="#" id="enlaceUsuarios">Usuarios</a></p>
					<p class="subtext">Registra usuarios</p>
				</li>
				<li class="blue">
					<p><a href="#" id="enlaceProveedores">Proveedores</a></p>
					<p class="subtext">Registra Proveedores</p>
				</li>
				<li class="green">
					<p><a href="#" id="enlaceClientes">Clientes</a></p>
					<p class="subtext">Registra Clientes</p>
				</li>
				<li class="purple">
					<p><a href="#" id="enlaceVentas">ventas</a></p>
					<p><a href="#" id="enlaceMostrar">mostrar ventas</a></p>
					<p class="subtext">Registra ventas</p>
				</li>
				<li class="yellow">
					<p><a href="#" id="enlaceIndicadores" >Indicadores</a></p>
					<p class="subtext">Seccion de indicadores</p>
				</li>
			</ul>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		<div id="destino">

		</div>


		</div>
	
		
	</BODY>
<HTML>
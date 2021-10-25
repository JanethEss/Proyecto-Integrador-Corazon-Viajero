<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="../CSS/style-index.css">    
    <link rel="stylesheet" href="../CSS/tours.css">
	<link rel="stylesheet" href="../CSS/TodosDestinos.css">
	
	<link rel="stylesheet" href="../buscador.css">
	<title>Corazón Viajero</title>
</head>
<body>
<!--Encabezado y Menú -->	
<header>
	<div class="container logo-nav-container">
		<a href="../../index.php" class="logo"><img src="../IMG/logo.png" alt="Corazón Viajero" class="logo"></a>
		<span class="menu-icon">Ver menú</span>
		<nav class="navigation">
			<ul>
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="../login.php">Iniciar sesión</a></li>
				<li><a href="../resennas.php">Reseñas</a></li>
				<li><a href="../nosotros.php">Quienes Somos</a></li>					
			</ul>
		</nav>
	</div>
</header>

<!--Contenido-->
<main>
<center>
<!--Part2. Destinos-->	
<div class="Box-TodosDestinos">		
    <h1 class="sombra"><strong class="color-purple"> VIAJERO </strong>!HORA DE ELEGIR UNA NUEVA EXPERIENCIA! </h1>    		
	<br>
	<h2>CASCADAS</h2>	
	<table class="contenido-opciones">
		<tr>
			<td class="filtro">
			<div class="contenido-filtro">
				<b> Tipo de destino </b><br><br>
				<a href="TodosDestinos.php">Todos los destinos</a><br>
				<strong class="ubicacion">Cascadas</strong><br>
				<a href="Reservas.php">Reservas naturales</a><br>
				<a href="Grutas.php">Grutas</a><br>
				<a href="Playas.php">Playas</a><br>
				<a href="Pueblos.php">Pueblos mágicos</a><br>
			</div>		
			</td>
			<td class="espacio"></td>
			<td class="lugares"> 
				<div class="lugar">
					<a href="Agenda/Lugar.php"> <img src="../IMG/Banners/BCascada.png" alt="Cascada" class="Fotolugar"> </a>		
				</div>					
			</td>			
		</tr>
		<tr>
		<td class="blanco"></td>
		<td class="espacio"></td>
		<td class="lugares"> 					
				<div class="lugar">
					<img src="../IMG/Banners/BProximamente.png" alt="" class="Fotolugar"> 			
				</div>	
				<div class="lugar">
					<img src="../IMG/Banners/BProximamente.png" alt="" class="Fotolugar"> 			
				</div>	
								
			</td>
		</tr>
	</table>
    
</div>
<br>

<!--Pie de pagina-->	
<div class="footer">	
	<table class="foo2">
		<tr>			
			<td class="pie1 alingcenter"> 
				&copy; CorazónViajero  
			</td>
			<td class="pie1 alingcenter">
				Turismo del estado de Chiapas
			</td>
			<td class="pie1 tab">
				<b>Contacto:</b><br>
				CorazonViajero@gmail.com
			</td>
		</tr>
	</table>
</div>

</center>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../Js/menu-js.js"></script>
</body>
</html>
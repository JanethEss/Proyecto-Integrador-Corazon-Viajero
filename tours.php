<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="CSS/style-index.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/tours.css">

	<title>Corazón Viajero</title>
</head>
<body>
<!--Encabezado y Menú -->	
<header>
	<div class="container logo-nav-container">
		<a href="index.php" class="logo"><img src="IMG/logo.png" alt="Corazón Viajero" class="logo"></a>
		<span class="menu-icon">Ver menú</span>
		<nav class="navigation">
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="login.php">Iniciar sesión</a></li>
				<li><a href="resennas.php">Reseñas</a></li>
				<li><a href="nosotros.php">Quienes Somos</a></li>					
			</ul>
		</nav>
	</div>
</header>

<!--Contenido-->
<main>
<center>
<!--Part2. Destinos-->	
<div class="Box-tours">		
    <h1 class="sombra"><strong class="color-purple"> VIAJERO </strong>!HORA DE ELEGIR UNA NUEVA EXPERIENCIA! </h1><br>
    	
	<hr>
	<h2>Tipo de destino</h2>
	<hr>
	
		<div class="destino"><a href="Destinos/Cascadas.php"><img src="IMG/Destinos/Cascadas.png" alt="" width="100%" class="image"></a></div>
		<div class="destino"><a href="Destinos/Reservas.php"><img src="IMG/Destinos/Reservas.png" alt="" width="100%" class="image"></a></div>
		<div class="destino"><a href="Destinos/Grutas.php"><img src="IMG/Destinos/Grutas.png" alt="" width="100%" class="image"></a></div>
		<div class="destino"><a href="Destinos/Playas.php"><img src="IMG/Destinos/Playas.png" alt="" width="100%" class="image"></a></div>
		<div class="destino"><a href="Destinos/Pueblos.php"><img src="IMG/Destinos/Pueblos.png" alt="" width="100%" class="image"></a></div>						
    
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
<script src="Js/menu-js.js"></script>
</body>
</html>
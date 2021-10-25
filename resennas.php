<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="CSS/style-index.css">
    <link rel="stylesheet" href="CSS/resennas.css">

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
				<li><a href="login.php">Iniciar Sesión</a></li>
				<li><a href="tours.php">Tours</a></li>
				<li><a href="nosotros.php">Quienes Somos</a></li>					
			</ul>
		</nav>
	</div>
</header>

<!--Contenido-->
<main>
<center>
<!--Part2. Destinos-->	
<div class="Box-resennas">		
	<h1>Reseñas</h1><br>
	<table class="resennas borde">
		<tr >
			<th class="borde tamano" >Nombre</th>
			<th class="borde">Comentario</th>			
		</tr>
		
		<tr class="">
			<th>Invalid</th>
			<th> </th>			
		</tr>
		<tr class="">
			<th>Invalid</th>
			<th> </th>		
		</tr>
	</table><br>
    <h2 class="izq">Añadir reseñas</h2>
	<form action="login.php" method="post">
	<table class="form">
		<tr>
			<td class="ref"><label for="correou">Nombre:</label></td>
			<td><input type="" name="" placeholder="Ingresa tu(s) nombre" class="cuadro-text"></td>
		</tr>
		<tr>
			<td><label for="correou">Comentario:</label></td>
			<td><input type="" name="" placeholder="Ingresa tu comentario" class="cuadro-text"></td>
		</tr>        
	</table><br>
      <input type="submit" name="" value="Añadir reseñas" class="btn"><br>	 

    </form>	
</div>
<br><br>

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
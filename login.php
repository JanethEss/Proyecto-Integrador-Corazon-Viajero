<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="CSS/style-index.css">
    <link rel="stylesheet" href="CSS/login.css">

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
				<li><a href="tours.php">Tours</a></li>
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
<div class="Box-login">		
	<div class="login-logo"><img src="IMG/Logo.png" alt="" width="100%"></div>
	<h2>Iniciar Sesión</h2>
    
	<form action="login.php" method="post">
	<table class="form">
		<tr>
			<td class="ref"><label for="correou">CORREO:</label></td>
			<td><input type="email" name="mail" placeholder="Ingresa tu correo electrónico" class="cuadro-text"></td>
		</tr>
		<tr>
			<td><label for="correou">CONTRASEÑA:</label></td>
			<td><input type="password" name="contra" placeholder="Ingresa tu contraseña" class="cuadro-text"></td>
		</tr>
	</table><br>
      <input type="submit" name="login" value="Listo para viajar" class="btn"><br>
	  Soy un nuevo viajero prefiero <a href="registrarme.php" class="a">registrarme</a> 

    </form>	
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
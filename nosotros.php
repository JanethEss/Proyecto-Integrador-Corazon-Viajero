<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="CSS/style-index.css">
    <link rel="stylesheet" href="CSS/nosotros.css">

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
				<li><a href="resennas.php">Reseñas</a></li>									
			</ul>
		</nav>
	</div>
</header>

<!--Contenido-->
<main>
<!--Part1. Quienes somos-->
<center>
<div class="Box-somos">
	<h1>Quienes somos</h1>
	<table>
		<tr>			
			<td class="text"> 
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima assumenda, ex autem veritatis numquam, adipisci id perspiciatis recusandae corrupti est distinctio enim maiores animi neque quidem labore rerum, eius sequi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione provident autem est pariatur obcaecati, 
			</td>
			<td class="img-somos">
				<img src="IMG/logo.png" alt="" class="Imagen">
			</td>
		</tr>
	</table>
</div>
<br><br>

<!--Part2. Agencias-->

<div class="Box-somos">	
	<hr>
	<h2>Agencias con las que trabajamos</h2>
	<hr>
        
	    <div class="agencias"><a href="#"><img src="IMG/Agencias/terretours.png" alt="" width="100%" class="aimage"></a></div>
		<div class="agencias"><a href="#"><img src="IMG/Agencias/pendiente.png" alt="" width="100%" class="aimage"></a></div>
		<div class="agencias"><a href="#"><img src="IMG/Agencias/pendiente.png" alt="" width="100%" class="aimage"></a></div>
		<div class="agencias"><a href="#"><img src="IMG/Agencias/pendiente.png" alt="" width="100%" class="aimage"></a></div>
		<div class="agencias"><a href="#"><img src="IMG/Agencias/pendiente.png" alt="" width="100%" class="aimage"></a></div>			
        			
</div>
<br><br>

<!--Part3. Contactanos-->
<div class="Box-somos">
    <hr>
	<h2>Contáctanos</h2>
	<hr>
    <table class="contacto">
        <tr>
            <th class="imgcontacto"><img src="IMG/correo.png" alt="Correo Electrónico" width="100%"></td>
            <th class="izq"><a href="#">CorazonViajero@gmail.com</a> </td>
        </tr>
        <tr>
            <th><img src="IMG/whats.png" alt="WhatsApp" width="100%"></td>
            <th class="izq"><a href="#">Envianos un mensaje por WhatsApp</a> </td>
        </tr>
    </table>
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
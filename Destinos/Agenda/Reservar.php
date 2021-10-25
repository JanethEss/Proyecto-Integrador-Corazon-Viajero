<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="../../CSS/style-index.css">
    <link rel="stylesheet" href="../../CSS/reservar.css">

	<title>Corazón Viajero</title>
</head>
<body>
<!--Encabezado y Menú -->	
<header>
	<div class="container logo-nav-container">
		<a href="index.php" class="logo"><img src="../../IMG/logo.png" alt="Corazón Viajero" class="logo"></a>
		<span class="menu-icon">Ver menú</span>
		<nav class="navigation">
			<ul>
				<li><a href="../../index.php">Inicio</a></li>
				<li><a href="../../tours.php">Tours</a></li>
				<li><a href="../../resennas.php">Reseñas</a></li>
				<li><a href="../../nosotros.php">Quienes Somos</a></li>					
			</ul>
		</nav>
	</div>
</header>

<!--Contenido-->
<main>
<center>
<!--Part2. Destinos-->	
<div class="Box-reservar">		
	<h1>Reservar</h1>
    <table class="todo">
        <tr>
            <td class="col"><img src="../../IMG/logo.png" alt="" class="imgres"></td>
            <td class="espacio"></td>
            <td class="col">
                <b>Destino</b><br>
                Descripción <br>
                Dia y hora de Salida - Dia y hora de Regreso <br>
                Día(s) de tours<br>
                Lugar de partida <br>
                Precio <br>
                Agencia <br>
                Cupo: <br>
                N° Viajeros:     <input type="num" name="num"  class="cuadro-num"> <br><br>
                Costo total: <br>
            </td>
        </tr>        
    </table>    
     
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="formulario" >
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<input type="hidden" name="business" value="tu_correo_paypal@gmail.com">
					<input type="hidden" name="currency_code" value="MXN">																

					<center><input type="submit" value="finalizar" class="btn"></center>
					
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
<script src="../../Js/menu-js.js"></script>
</body>
</html>
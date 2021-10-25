<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="CSS/style-index.css">
    <link rel="stylesheet" href="CSS/loginadmin.css">

	<title>Corazón Viajero</title>
</head>
<body>
<!--Encabezado  -->	
<header>
    <br>	
</header>

<!--Contenido-->
<main>
<center>
<!--Part2. Destinos-->	
<div class="Box-login">		
	<div class="login-logo"><img src="IMG/usuario.png" alt="" width="100%"></div>
	<h2>Iniciar Sesión</h2>
    
	<form action="control.php" method="post">
	<table class="form">
		<tr>
			<td class="ref"><label for="correou">CORREO:</label></td>
			<td><input type="email" name="mail" placeholder="Administrador Corazón Viajero" class="cuadro-text"></td>
		</tr>
		<tr>
			<td><label for="correou">CONTRASEÑA:</label></td>
			<td><input type="password" name="contra" placeholder="Administrador Corazón Viajero" class="cuadro-text"></td>
		</tr>
	</table><br>
      <input type="submit" name="login" value="Ingresar" class="btn"><br>	  
        <br>
    </form>	
</div>
<br>

<!--Pie de pagina-->	
<div class="footer">	
    
</div>

</center>
</main>
</body>
</html>
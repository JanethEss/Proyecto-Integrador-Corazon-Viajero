<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="IMG/logo.png"/> <!--Icono-->
	<link rel="stylesheet" href="CSS/style-index.css">
    <link rel="stylesheet" href="CSS/loginadmin.css">
	<link rel="stylesheet" href="CSS/control.css">

	<title>Corazón Viajero</title>
</head>
<body>
<!--Encabezado  -->	
<header>
    <br>	
</header>

<!--Contenido-->
<main class="mainadmin">

<center>
<!--Part2. Destinos-->	
<div class="Box-Opciones">	    	
<img src="IMG/usuario.png" alt="administrador" width="10%">
<h2>Control de tours</h2>
<table></a>
	<td class="btnagregar"> <a href="javascript:abrir()"><div class="agregar">Agregar nuevo tour</div> </a> </td>
	<td class="btnagregar"> <a href="javascript:abrir2()"><div class="agregar">Agregar nueva agencia</div> </a></td>
	<td class="btnagregar"> <a href="javascript:abrir3()"><div class="agregar">Agregar nuevo lugar</div> </a> </td>	
</table><br>

<!--Ventana flotante AGREGAR TOUR-->
<div class="ventana" id="vent">
	<a href="javascript:cerrar()"><div id="cerrar">Cerrar</div></a>
	<h2>Agregar tour</h2>
		<form action="control.php" method="post">
		<table class="form">
			<tr>
				<td class="agr"><label for="correou">Descripción:</label></td>
				<td><input type="descripcion" name="descripcion" placeholder="Descripcion del tour" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Fecha de salida:</label></td>
				<td><input type="" name="" placeholder="Dia y hora de salida" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Fecha de regreso:</label></td>
				<td><input type="" name="" placeholder="Dia y hora de regreso" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Lugar de partida:</label></td>
				<td><input type="" name="" placeholder="Lugar de partida" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Duración:</label></td>
				<td><input type="" name="" placeholder="Dias del tour (Solo números)" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Precio:</label></td>
				<td><input type="" name="" placeholder="Precio del tour" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Cupo:</label></td>
				<td><input type="" name="" placeholder="Cupo (Solo números)" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="ref"><label for="correou">Agencia:</label></td>
				<td><select class="list" Name="Name_of_list_box" Size="Number_of_options">  
					<option> Elegir agencia</option>  
					<option> Agencia 1</option>  
					<option> Agencia 2 </option>  
					<option> Agencia 3 </option>  
					</select> 
				</td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Lugar:</label></td>
				<td><select class="list" Name="Name_of_list_box" Size="Number_of_options">  
					<option> Elegir lugar </option>  
					<option> Lugar 1 </option>  
					<option> Lugar 2 </option>  
					<option> Lugar 3 </option>  
					</select> 
				</td>
			</tr>
		</table><br>
		<input type="submit" name="" value="Agregar" class="btn"><br>	  
			<br>
		</form>	
</div>
<script>
	function abrir(){
		//Cambiar el display de la ventana con id vent de agregar tour
		document.getElementById("vent").style.display="block";
	}
	function cerrar(){
		//Cambiar el display de la ventana con id vent de agregar tour
		document.getElementById("vent").style.display="none";
	}
</script>

<!--Ventana flotante AGREGAR AGENCIA-->
<div class="ventana" id="vent2">
	<a href="javascript:cerrar2()"><div id="cerrar">Cerrar</div></a>
	<h2>Agregar agencia</h2>
		<form action="control.php" method="post">
		<table class="contenido-opciones">
		
		<tr class="encabezado">
            <td class="nom">Nombre:</td>
            <td class="sit">Sitio web:</td>
            <td class="tel">Teléfono:</td>
            <td class="dir">Dirección:</td>
            <td class="botonvent"> </td>
			<td class="botonvent"> </td>
		</tr>
        <tr >
            <td class="separador">Terretours</td>
            <td class="separador">www.terretours.com</td>
            <td class="separador">9612839077</td>
            <td class="separador">Col.Centro</td>            
            <td><div class="btn"> <img src="IMG/editar.png"width="100%"></div></td>
			<td><div class="btn"> <img src="IMG/eliminar.png" width="100%"></div></td>
		</tr>               
        <tr>
            <td > </td>
			<td > </td>
			<td > </td>
            <td > </td>            
            <td><div class="btn"> <img src="IMG/editar.png"width="100%"></div></td>
			<td><div class="btn"> <img src="IMG/eliminar.png" width="100%"></div></td>
		</tr>
	</table><br>
		<table class="form">
			<tr>
				<td class="agr"><label for="correou">Nombre:</label></td>
				<td><input type="" name="" placeholder="Nombre de la agencia" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Sitio web:</label></td>
				<td><input type="" name="" placeholder="Sitio web oficial" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Teléfono:</label></td>
				<td><input type="" name="" placeholder="Numero de teléfono (10 digitos)" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Dirección:</label></td>
				<td><input type="" name="" placeholder="Ubicacion de la agencia" class="cuadro-agregar"></td>
			</tr>			
		</table><br>
		<input type="submit" name="" value="Agregar" class="btn"><br>	  
			<br>
		</form>	
</div>
<script>
	function abrir2(){
		//Cambiar el display de la ventana con id vent de agregar tour
		document.getElementById("vent2").style.display="block";
	}
	function cerrar2(){
		//Cambiar el display de la ventana con id vent de agregar tour
		document.getElementById("vent2").style.display="none";
	}
</script>


<!--Ventana flotante AGREGAR LUGAR-->
<div class="ventana" id="vent3">
	<a href="javascript:cerrar3()"><div id="cerrar">Cerrar</div></a>
	
	<h2>Agregar lugar</h2>
	<table class="formlugar">
			<tr>
				<td class="agr"><label for="correou">Lugar:</label></td>
				<td><input type="" name="" placeholder="Nombre del lugar" class="cuadro-agregar"></td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Destino:</label></td>
				<td><select class="list" Name="Name_of_list_box" Size="Number_of_options">  
					<option> Elegir el tipo de estino </option>  
					<option> Cascada </option>  
					<option> Reserva natural </option>  
					<option> Playas </option>  
					<option> Grutas </option>  
					<option> Pueblo mágico </option>  
					</select> 
				</td>
			</tr>
			<tr>
				<td class="agr"><label for="correou">Imagen:</label></td>
				<td><input type="submit" name="" value="Subir imagen" class="agregarimg"></td>
			</tr>						
		</table><br>
		<input type="submit" name="" value="Agregar" class="btn"><br>	  		
		</form>	<br>

		<form action="control.php" method="post">
		<table class="contenido-opciones">
		
		<tr class="encabezado">
            <td class="lug">Lugar:</td>
            <td class="des">Tipo de destino:</td>
            <td class="img">Imagen:</td>        
            <td class="botonvent"> </td>
			<td class="botonvent"> </td>
		</tr>
        <tr >
            <td class="separador">Sima de las cotorras</td>
            <td class="separador">Reserva natural</td>
            <td class="separador">imagen.png</td>                    
            <td><div class="btn"> <img src="IMG/editar.png"width="100%"></div></td>
			<td><div class="btn"> <img src="IMG/eliminar.png" width="100%"></div></td>
		</tr>               
        <tr>
            <td > </td>
			<td > </td>
			<td > </td>           
            <td><div class="btn"> <img src="IMG/editar.png"width="100%"></div></td>
			<td><div class="btn"> <img src="IMG/eliminar.png" width="100%"></div></td>
		</tr>
	</table><br>
		
</div>
<script>
	function abrir3(){
		//Cambiar el display de la ventana con id vent de agregar tour
		document.getElementById("vent3").style.display="block";
	}
	function cerrar3(){
		//Cambiar el display de la ventana con id vent de agregar tour
		document.getElementById("vent3").style.display="none";
	}
</script>


	<table class="contenido-opciones">
		
		<tr class="encabezado">
            <td class="uno">Descripción</td>
            <td class="dos">Dia y hora de salidad</td>
            <td class="dos">Dia y hora de regreso</td>
            <td class="tres">Lugar de partida</td>
            <td class="cuatro">Dias</td>
            <td class="cinco">Precio </td>            
            <td class="cuatro">Cupo</td>
			<td class="seis">Lugar</td>
            <td class="seis">Agencia</td>
            <td class="boton"> </td>
			<td class="boton"> </td>
		</tr>
        <tr >
            <td class="separador">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui officiis commodi magnam incidunt dolor eaque blanditiis inventore saepe esse ea vitae deleniti in</td>
            <td class="separador">13-10-21 7:00</td>
            <td class="separador">13-10-21 11:00</td>
            <td class="separador">Parque central</td>
            <td class="separador">1</td>
            <td class="separador">$150.00</td>
            <td class="separador">10</td>
			<td class="separador">Cascada</td>
            <td class="separador">Terretours</td>
            <td><div class="btn"> <img src="IMG/editar.png"width="100%"></div></td>
			<td><div class="btn"> <img src="IMG/eliminar.png" width="100%"></div></td>
		</tr>               
        <tr>
            <td > </td>
			<td > </td>
			<td > </td>
            <td > </td>
            <td > </td>
            <td > </td>
            <td > </td>
            <td > </td>
            <td > </td>
            <td><div class="btn"> <img src="IMG/editar.png"width="100%"></div></td>
			<td><div class="btn"> <img src="IMG/eliminar.png" width="100%"></div></td>
		</tr>
	</table>
    
</div>
<br>

<!--Pie de pagina-->	
<div class="footer">	
    
</div>

</center>
</main>
</body>
</html>
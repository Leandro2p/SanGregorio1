<?php
	require 'conexion.php';
	$where = "";
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE Nro_legajo LIKE '%$valor'";
		}
	}
	$sql= "SELECT * FROM notaalumno"; 
	$resultado= $mysqli->query ($sql);

?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="estilos.css" />
		<link href="referencia.css" rel="stylesheet"/>	
		<?php
		include "includes/estilo.php";
	?>
</head>


<body >
	<div id="enc">
	<br></br>
	 <center>  <img src="images/logo2.png"width="100"height="100"> </center> 	
		<div class="row" >
			<h1 id= "sangreg" style="text-align:center">San Gregorio</h1>
		</div>
		<div class="row">
			
			<div  id="menu1" align="center" class="col-xs-12 col-sm-6 col-md-6"><button id="menu1"class="btn btn-primary"> Registrar Notas</button></div>
			<div  id="menu2" align="center" class="col-xs-12 col-sm-6 col-md-6"><button id="menu2"class="btn btn-primary"> Ver Notas</button></div>
			
		</div>		
		<br></br>
		</div>

		<div class="row"  >
		<H6 align="center"> 
		<center><div id="LoadPage">		
		Nombre: Instituto SUPERIOR SAN GREGORIO<br></br>
Clave Unica de Establecimiento (CUE): 380094900<br></br>
Provincia: Jujuy<br></br>
Partido: SAN PEDRO<br></br>
Localidad: SAN PEDRO<br></br>
Sector: Privado<br></br>
Estado actual: Activo<br></br>
Centro de ámbito Urbano<br></br>
Dirección: PEDRO GOYENA 33 CENTRO<br></br>
Código postal 4500<br></br>
Télefono 426915<t></t>
Código de localidad: 38063050<br></br>
	</div>
		</center>
</H6>
	<?php
		include "includes/footer.php";
	?>
			
</body>
</html>	
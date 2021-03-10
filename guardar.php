<?php
	require 'conexion.php';
	$nro_legajo=$_GET['Nro_Legajo'];
	$nombre = $_GET['Nombre_Apellido'];
	$FH_PP = $_GET['fh_PP'];
	$primer_parcial = $_GET['primer_parcial'];
	$recuperatorio_primer = $_GET['Recuperatorio_PP'];
	$FH_RPP = $_GET['Fh_RPP'];
	$segundo_parcial = $_GET['Segundo_parcial'];
	$FH_SP = $_GET['FH_SP'];
	$recuperatorio_segundo = $_GET['Recuperatorio_SP'];
	$materias =$_GET['id_materia'];
	$FH_RSP = $_GET['FH_RSP'];
	$sql = "INSERT INTO notaalumno (nro_Legajo, Nombre_Apellido,id_materia, fh_PP, primer_parcial, Recuperatorio_PP, Fh_RPP, Segundo_parcial, FH_SP, Recuperatorio_SP, FH_RSP, State_NA) VALUES ($nro_legajo, '$nombre',$materias, '$FH_PP', '$primer_parcial', '$recuperatorio_primer', '$FH_RPP', '$segundo_parcial' , '$FH_SP', '$recuperatorio_segundo', '$FH_RSP', 1)";
	
	$resultado = $mysqli->query($sql);
	echo $resultado;
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

<?php
	
	require 'conexion.php';
	$id = $_POST['ID_NA'];
	$nro_legajo=$_POST['Nro_Legajo'];
	$nombre = $_POST['Nombre_Apellido'];
	$primer_parcial = $_POST['primer_parcial'];
	$FH_PP = $_POST['fh_PP'];	
	$recuperatorio_primer = $_POST['Recuperatorio_PP'];
	$FH_RPP = $_POST['Fh_RPP'];
	$segundo_parcial = $_POST['Segundo_parcial'];
	$FH_SP = $_POST['FH_SP'];
	$recuperatorio_segundo = $_POST['Recuperatorio_SP'];
	$FH_RSP = $_POST['FH_RSP'];
	$sql = "UPDATE notaalumno SET Nro_Legajo = '$nro_legajo', Nombre_Apellido = '$nombre', primer_parcial = '$primer_parcial', fh_PP= '$FH_PP',Recuperatorio_PP = '$recuperatorio_primer', Fh_RPP='$FH_RPP', Segundo_parcial = '$segundo_parcial', FH_SP = '$FH_SP',Recuperatorio_SP = '$recuperatorio_segundo', FH_RSP = '$FH_RSP' WHERE ID_NA = '$id'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>

		<font face="arial,verdana" color="Black" size="4">
<?php
	require 'conexion.php';
	error_reporting(error_reporting() & ~E_NOTICE);
	$ID_NA = $_GET['ID_NA'];
	if($ID_NA== null){
		echo "si";
	}
	$sql = "SELECT * FROM notaalumno WHERE ID_NA ='$ID_NA'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nro_legajo" class="col-sm-2 control-label">Numero de Legajo</label>
					<div class="col-sm-1">
						<input type="number"  class="form-control" id="nro_legajo" name="Nro_Legajo" placeholder="Numero de Legajo" value="<?php echo $row['Nro_Legajo']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="ID_NA" name="ID_NA" value="<?php echo $row['ID_NA']; ?>" />
				
					<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre Alumno</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nombre" name="Nombre_Apellido" placeholder="Nombre Alumno" value="<?php echo $row['Nombre_Apellido']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="fecha primer parcial" class="col-sm-2 control-label">Fecha Primer Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_PP" name="fh_PP" placeholder="Fecha Primer Parcial" value="<?php echo $row['fh_PP']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="primer_parcial" class="col-sm-2 control-label">Primer Parcial</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="primer_parcial" name="primer_parcial" placeholder="Primer Parcial" value="<?php echo $row['primer_parcial']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="fecha recuperatorio primer parcial" class="col-sm-2 control-label">Fecha Recuperatorio Primer Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_RPP" name="Fh_RPP" placeholder="Fecha Recuperatorio Primer Parcial" value="<?php echo $row['Fh_RPP']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="recuperatorio_primer" class="col-sm-2 control-label">Recuperatorio Primer Parcial</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="recuperatorio_primer" name="Recuperatorio_PP" placeholder="Recuperatorio Primer Parcial"value="<?php echo $row['Recuperatorio_PP']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="fecha segundo parcial" class="col-sm-2 control-label">Fecha Segundo Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_SP" name="FH_SP" placeholder="Fecha Segundo Parcial"value="<?php echo $row['FH_SP']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="segundo_parcial" class="col-sm-2 control-label">Segundo Parcial</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="segundo_parcial" name="Segundo_parcial" placeholder="Segundo Parcial"value="<?php echo $row['Segundo_parcial']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="fecha recuperatorio segundo parcial" class="col-sm-2 control-label">Fecha Recuperatorio Segundo Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_RSP" name="FH_RSP" placeholder="Fecha Recuperatorio Segundo Parcial" value="<?php echo $row['FH_RSP']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="recuperatorio_segundo" class="col-sm-2 control-label">Recuperatorio Segundo Parcial</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="recuperatorio_segundo" name="Recuperatorio_SP" placeholder="Recuperatorio Segundo Parcial" value="<?php echo $row['Recuperatorio_SP']; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
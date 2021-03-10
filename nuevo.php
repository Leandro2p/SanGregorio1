<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="http://code.jquery.com/jquery.js"></script>

	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="GET" action="guardar.php" autocomplete="off">
					<div class="form-group">
					<label for="Nro_Legajo" class="col-sm-2 control-label">Nro Legajo</label>
					<div class="col-sm-1">
						<input type="number" class="form-control" id="nro_legajo" name="Nro_Legajo" value = "" placeholder="Nro de Legajo" min= "1" required>
					</div>
				</div>
				<div class="form-group">
					<label for="Nombre_Apellido" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nombre" name="Nombre_Apellido" value = "" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label for="fh_PP" class="col-sm-2 control-label">Fecha Primer Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_PP" name="fh_PP" value = "" placeholder="Fecha Primer Parcial" required>
					</div>
				</div>
				<div class="form-group">
					<label for="primer_parcial" class="col-sm-2 control-label">Primer Parcial</label>
					<div class="col-sm-1">
						<input type="number" class="form-control" id="primer_parcial" name="primer_parcial" value = "" placeholder="Primer Parcial"  step =0.01  min= "1" max= "10"required>
					</div>
				</div>
				<div class="form-group">
					<label for="Fh_RPP" class="col-sm-2 control-label">Fecha Recuperatorio Primer Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_RPP" name="Fh_RPP" value = "" placeholder="Fecha Recuperatorio Primer Parcial">
					</div>
				</div>
				<div class="form-group">
					<label for="Recuperatorio_PP" class="col-sm-2 control-label">Recuperatorio Primer Parcial</label>
					<div class="col-sm-1">
						<input type="number" class="form-control" id="recuperatorio_primer" name="Recuperatorio_PP" value = "" placeholder="Recuperatorio Primer Parcial" step =0.01  min= "1" max= "10">
					</div>
				</div>
				<div class="form-group">
					<label for="FH_SP" class="col-sm-2 control-label">Fecha Segundo Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_SP" name="FH_SP" value = "" placeholder="Fecha Segundo Parcial">
					</div>
				</div>
				<div class="form-group">
					<label for="segundo_parcial" class="col-sm-2 control-label">Segundo Parcial</label>
					<div class="col-sm-1">
						<input type="number" class="form-control" id="segundo_parcial" name="Segundo_parcial" value = "" placeholder="Segundo Parcial" step =0.01  min= "1" max= "10">
					</div>
				</div>
				<div class="form-group">
					<label for="FH_RSP" class="col-sm-2 control-label">Fecha Recuperatorio Segundo Parcial</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="FH_RSP" name="FH_RSP" value = "" placeholder="Fecha Recuperatorio Segundo Parcial">
					</div>
				</div>
				<div class="form-group">
					<label for="recuperatorio_segundo" class="col-sm-2 control-label">Recuperatorio Segundo Parcial</label>
					<div class="col-sm-1">
						<input type="number" class="form-control" id="recuperatorio_segundo" name="Recuperatorio_SP" value = "" placeholder="Recuperatorio Segundo Parcial" step =0.01  min= "1" max= "10">
					</div>
				</div>
				
				<div class="form-group">
					<label for="materia" class="col-sm-2 control-label">Materia</label>
					
					<select name = "id_materia" class="col-sm-2">
							<option> Seleccione una Materia</option>
							<option value = "1">Enfermería Básica y en Salud Comunitaria</option>
							<option value = "2">Práctica de Enfermería Básica y en Salud Comunitaria</option>
							<option value = "3">Morfofisiología</option>
							<option value = "4">Comunicación Oral y Escrita</option>
							<option value = "5">Microbiología</option>
							<option value = "6">Biofísica</option>
							<option value = "7">Filosofía y Antropología Sociocultural</option>
							<option value = "8">Psicología Evolutiva</option>
							<option value = "9">Química Biológica</option>
							<option value = "10">Enfermeria Medica y Especialidades</option>
							<option value = "11">Practica de Enfermeria Medica y Especial</option>
							<option value = "12">Etica y Bioetica</option>
							<option value = "13">Farmacologia</option>
							<option value = "14">Nutrición</option>
							<option value = "15">Enfermeria Quirurgica y Especialidades</option>
							<option value = "16">Practica de Enfermeria Quirurgica y Especialidades</option>
							<option value = "17">Marcos Legal en la Practica de Enfermería</option>
							<option value = "18">Psicologia Social</option>
							<option value = "19">Introduccion  a la Metodologia de la Investigacion</option>
							<option value = "20">Ingles I</option>
							<option value = "21">Enfermeria Materno Infanto Juvenil</option>
							<option value = "22">Practica de Enfermeria Materno Infanto Juvenil</option>
							<option value = "23">Tecnologias de la Informacion y Comunicacion</option>
							<option value = "24">Organizacion y Gestion de Enfermeria</option>
							<option value = "25">Ingles II</option>
							<option value = "26">Enfermeria de Salud Mental y Psiquiatrica</option>
							<option value = "27">Practica de Enfermeria de Salud Mental y Psiquiatrica</option>
							<option value = "28">Integracion de la Practica Profesional</option>
					</select>
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
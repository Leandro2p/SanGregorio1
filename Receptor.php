<?php
	require 'conexion.php';
	$mateID = $_GET['Acces'];
	$where = "WHERE id_materia= $mateID AND State_NA = 1";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			
			$where = "WHERE id_materia= $mateID AND State_NA = 1 AND Nro_legajo LIKE '$valor' OR id_materia= $mateID AND Nombre_Apellido LIKE '$valor'";
		}
	}
	
	$sql= "SELECT ID_NA, Nro_Legajo, Nombre_Apellido, NombreAsignatura, primer_parcial, fh_PP, Recuperatorio_PP, Fh_RPP, Segundo_parcial, FH_SP, Recuperatorio_SP, FH_RSP FROM notaalumno INNER JOIN asignatura ON notaalumno.id_materia = asignatura.ID_ASIG $where";
	$resultado= $mysqli->query ($sql);

?>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
		<link href="css/Div.css" rel="stylesheet">
		<style>
		 body{
	background-color: lightblue;
	background-image: url('images/background.png');
	background-repeat: no-repeat; 
	background-size: 100% 100%; background-attachment: fixed; 

}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
	background-color: white;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
		</head>

<body>
    
	<div class="container">
		<div class="row">
			<h2 style="text-align:center">San Gregorio</h3>
		</div>
		
		<br>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>NRo Legajo/Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
		<div id = "table"class="row table-responsive">
			<table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Numero de <br></br>Legajo</th>
						<th>Alumno/a</th>
						<th>Materia</th>
						<th>Primer <br></br>Parcial</th>
						<th>Fecha<br></br>Primer Parcial</th>
						<th>Recuperatorio <br></br>Primer Parcial</th>
						<th>Fecha Recuperatorio <br></br> 1 Parcial</th>
						<th>Segundo<br></br> Parcial</th>
						<th>Fecha<br></br>Segundo Parcial</th>
						<th> Recuperatorio <br></br>Segundo Parcial</th>
						<th>Fecha Recuperatorio<br></br> 2 Parcial</th>												
					</tr>
				</thead>
				<tbody>
				<?php while($row = $resultado-> fetch_array(MYSQLI_ASSOC)) { ?>
							<tr align="center">
						<td width="80"><?php echo $row['Nro_Legajo']; ?></td>
						<td width="80"><?php echo $row['Nombre_Apellido']; ?></td>
						<td width="80"><?php echo $row['NombreAsignatura']; ?></td>
						<td width="80"><?php echo $row['primer_parcial']; ?></td>
						<td width="80"><?php echo $row['fh_PP']; ?></td>
						<td width="80"><?php echo $row['Recuperatorio_PP']; ?></td>
						<td width="80"><?php echo $row['Fh_RPP']; ?></td>
						<td width="80"><?php echo $row['Segundo_parcial']; ?></td>
						<td width="80"><?php echo $row['FH_SP']; ?></td>
						<td width="80"><?php echo $row['Recuperatorio_SP']; ?></td>
						<td width="80"><?php echo $row['FH_RSP']; ?></td>
						<td><a href="modificar.php?ID_NA=<?php echo $row['ID_NA']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<td><a href="eliminar.php?ID_NA=<?php echo $row['ID_NA']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
							
					</tr>
				<?php } ?>
				</tbody>
			</table>
		
		</div>
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
</body>
</html>	
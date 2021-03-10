		
		<?php
	require 'conexion.php';
            include 'index.php';

            $codigo = $_POST['ID_NA'];
            mysqli_select_db($link, $bd) or die ("Error al conectar a la base de Datos");
            $result = mysqli_query($link, "SELECT * FROM id11534443_sangregorio WHERE ID_NA = '$codigo' ");

            while($row = mysqli_fetch_array($result)){
                $cod = $row[0];
                $nom= $row[1];
            }

        ?>
<?PHP

	$fecha = $_POST['fecha'];
	$hora_inicio = $_POST['hora_inicio'];
	$hora_fin = $_POST['hora_fin'];
	$numero_control = $_SESSION['numero_control'];
	$estatus = 1;
	
	$fecha_completa = date("Y/m/d", strtotime($fecha));
	
	$query = "INSERT INTO 
						reunion(id_reunion, numero_control, fecha_citada, hora_inicio, hora_finalizada, fecha_creacion, estatus) 
					VALUES 
						(null,?,?,?,?,now(),?)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("isssi",$numero_control, $fecha, $hora_inicio, $hora_fin, $estatus);
		
		$stmt->execute();
		
		$id_reunion = $stmt->insert_id;
		
		$stmt->close();
		
		$respuesta = $fecha;
	}

?>
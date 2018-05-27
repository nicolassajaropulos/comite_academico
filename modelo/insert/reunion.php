<?PHP

	$fecha = $_POST['fecha'];
	$hora_inicio = $_POST['hora_inicio'];
	$hora_fin = $_POST['hora_fin'];
	$id_lugar = $_POST['id_lugar'];
	$numero_control = $_SESSION['numero_control'];
	$estatus = 1;
	
	$fecha_completa = date("Y/m/d", strtotime($fecha));
	
	// $query = "INSERT INTO 
						// lugar(id_lugar, nombre_lugar, calle, numero_exterior, colonia, fecha_creacion, estatus) 
					// VALUES 
						// (Null,?,?,?,?,Now(),?)";
	
	// if($stmt = $mysqli->prepare($query)){
		
		// $stmt->bind_param("iisssi",$numero_control, $id_lugar, $fecha, $hora_inicio, $hora_fin, $estatus);
		
		// $stmt->execute();
		
		// $id_reunion = $stmt->insert_id;
		
		// $stmt->close();
		
		// $respuesta = $id_reunion;
	// }
	
	$query = "INSERT INTO 
						reunion(id_reunion, numero_control, id_lugar, fecha_citada, hora_inicio, hora_finalizada, fecha_creacion, estatus) 
					VALUES 
						(null,?,?,?,?,?,now(),?)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("iisssi",$numero_control, $id_lugar, $fecha, $hora_inicio, $hora_fin, $estatus);
		
		$stmt->execute();
		
		$id_reunion = $stmt->insert_id;
		
		$stmt->close();
		
		$respuesta = $id_reunion;
	}
	
	return $respuesta;

?>
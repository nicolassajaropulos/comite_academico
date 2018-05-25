<?PHP

	$numero_control = $_SESSION['numero_control'];
	
	$id_solicitud = $_POST['id_solicitud'];
	$comentario = $_POST['comentario'];
	
	$estatus = 1;
	
	$id_comentario = 0;
	
	$query = "INSERT INTO 
						comentario(id_comentario, comentario, fecha_creacion, estatus) 
					VALUES 
						(NULL,?,NOW(),?)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("si", $comentario, $estatus);
		
		$stmt->execute();
		
		$id_comentario = $stmt->insert_id;
		
		$stmt->close();
		
	}
	
	$estatus_detalle_comentario = $_POST['estatus'];
	
	$query2 = "INSERT INTO 
					solicitud_detalle_comentario(id_solicitud_detalle_comentario, id_solicitud, id_comentario, numero_control, fecha_creacion, estatus) 
				VALUES 
					(NULL,?,?,?,NOW(),?)";

	if($stmt = $mysqli->prepare($query2)){
		
		$stmt->bind_param("iiii", $id_solicitud, $id_comentario, $numero_control, $estatus_detalle_comentario);
		
		$stmt->execute();
		
		$id_solicitud_detalle_comentario = $stmt->insert_id;
		
		$stmt->close();
		
	}

	$respuesta = $id_solicitud_detalle_comentario;
	
?>
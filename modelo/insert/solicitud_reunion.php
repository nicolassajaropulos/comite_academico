<?PHP

	$id_solicitud = $_POST['id_solicitud'];
	$id_reunion = $_POST['id_reunion'];
	
	$estatus = 1;
	
	$query = "INSERT INTO 
						reunion_solicitud(id_reunion_solicitud, id_reunion, id_solicitud, fecha_creacion, estatus) 
					VALUES 
						(NULL,?,?,NOW(),?)";

	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("iii",$id_reunion, $id_solicitud, $estatus);
		
		$stmt->execute();
		
		$id_reunion_solicitud = $stmt->insert_id;
		
		$stmt->close();
		
	}
	
	$respuesta = $id_reunion_solicitud;
	
?>
<?PHP

	$id_solicitud = $_PUT['id_solicitud'];
	$estatus = $_PUT['estatus'];
	
	$query = "UPDATE solicitud SET id_estatus = ? WHERE id_solicitud = ?";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("ii",$estatus, $id_solicitud);
		
		$stmt->execute();
		
		$stmt->close();
		
	}
	
	$respuesta = 1;

?>
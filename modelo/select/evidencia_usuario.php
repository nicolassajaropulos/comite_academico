<?PHP

	$id_solicitud = $_GET['id_solicitud'];
	
	$respuesta = array();
	
	$query = "SELECT
					evidencia
				FROM
					usuario_evidencia
				WHERE
					id_solicitud = ?
				AND
					estatus = 1";
					
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_solicitud);
		
		$stmt->execute();
		
		$stmt->bind_result($evidencia);
		
		while($stmt->fetch()){
			
			$respuesta[] = array(
				"evidencia" => $evidencia
			);
			
		}
		
		$stmt->close();
		
	}
	
	return $respuesta;

?>
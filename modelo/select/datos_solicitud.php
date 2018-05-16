<?PHP

	$id_solicitud = $_GET['id_solicitud'];
	
	$respuesta = array();
	
	$query = "Call consulta_solicitud_por_id_solicitud(?)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_solicitud);
		
		$stmt->execute();

		$stmt->bind_result($nombre_usuario,$nombre_carrera,$solicitud,$motivo_personal,$motivo_academico,$motivo_otro);
		
		while($stmt->fetch()){
			
			$respuesta[] = array(
				"nombre_usuario" => $nombre_usuario ,
				"nombre_carrera" => $nombre_carrera ,
				"solicitud" => $solicitud ,
				"motivo_personal" => $motivo_personal ,
				"motivo_academico" => $motivo_academico ,
				"motivo_otro" => $motivo_otro
			);
			
		}
		
		$stmt->close();
		
	}

	return $respuesta;
	
?>
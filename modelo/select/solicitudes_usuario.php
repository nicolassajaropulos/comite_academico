<?PHP

	$numero_control = $_SESSION['numero_control'];
	
	$respuesta = array();
	
	$query = "Call consulta_por_usuario(?)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$numero_control);
		
		$stmt->execute();
		
		$stmt->bind_result($nombre_usuario, $id_carrera, $nombre_carrera, $id_solicitud, $solicitud, $fecha_creacion, $ultima_modificacion, $estatus);
		
		while($stmt->fetch()){
			
			$respuesta[] = array(
				"nombre_usuario" => $nombre_usuario,
				"id_carrera" => $id_carrera,
				"nombre_carrera" => $nombre_carrera,
				"id_solicitud" => $id_solicitud,
				"solicitud" => $solicitud,
				"fecha_creacion" => $fecha_creacion,
				"ultima_modificacion" => $ultima_modificacion,
				"estatus" => $estatus,
			);

		}
		
	}

	return $respuesta;
?>
<?PHP

	$id_reunion = $_GET['id_reunion'];
	
	$respuesta = array();
	
	$query = "CALL consulta_por_reunion(?)";

	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_reunion);
		
		$stmt->execute();
		
		$stmt->bind_result($nombre_usuario, $numero_control, $prioridad, $id_carrera, $nombre_carrera, $id_solicitud, $solicitud, $fecha_creacion, $ultima_modificacion, $estatus);
		
		while($stmt->fetch()){
			
			$respuesta[] = array(
				"nombre_usuario" => $nombre_usuario,
				"numero_control" => $numero_control,
				"prioridad" => $prioridad,
				"id_carrera" => $id_carrera,
				"nombre_carrera" => $nombre_carrera,
				"id_solicitud" => $id_solicitud,
				"solicitud" => $solicitud,
				"fecha_creacion" => $fecha_creacion,
				"ultima_modificacion" => $ultima_modificacion,
				"estatus" => $estatus,
			);

		}
		
		$stmt->close();
	}
	
	return $respuesta;
?>
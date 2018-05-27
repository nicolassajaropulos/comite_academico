<?PHP

	$numero_control = $_SESSION['numero_control'];
	
	$carreras = array();
	$respuesta = array();
	
	$query = "SELECT id_carrera FROM usuario_carrera WHERE numero_control = ?";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$numero_control);
		
		$stmt->execute();
		
		$stmt->bind_result($id_carrera);
		
		while($stmt->fetch()){
			
			$carreras[] = array(
				"id_carrera" => $id_carrera
			);

		}
		
		$stmt->close();
	}
	
	foreach($carreras as $carrer){
		
		$query = "Call consulta_por_carrera(?)";
	
		if($stmt = $mysqli->prepare($query)){
			
			$stmt->bind_param("i",$carrer['id_carrera']);
			
			$stmt->execute();
			
			$stmt->bind_result($nombre_usuario, $numero_control, $prioridad, $id_carrera, $nombre_carrera, $id_solicitud, $solicitud, $fecha_creacion, $ultima_modificacion, $estatus);
			
			while($stmt->fetch()){
				
				if($estatus == "Enviada a Coordinador"){
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
						"estatus" => $estatus
					);
				}

			}
			
			$stmt->close();
		}
		
	}

?>
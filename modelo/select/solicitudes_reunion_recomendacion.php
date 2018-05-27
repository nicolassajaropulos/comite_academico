<?PHP

	$id_reunion = $_GET['id_reunion'];
	$numero_control_usuario = $_SESSION['numero_control'];
	
	$respuesta = array();
	$solicitudes_generales = array();
	$solicitudes_validadas = array();
	
	$query = "CALL consulta_por_reunion(?)";

	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_reunion);
		
		$stmt->execute();
		
		$stmt->bind_result($nombre_usuario, $numero_control, $prioridad, $id_carrera, $nombre_carrera, $id_solicitud, $solicitud, $fecha_creacion, $ultima_modificacion, $estatus);
		
		while($stmt->fetch()){
			
			$solicitudes_generales[] = array(
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
		
		$stmt->close();
	}
	
	$query = "SELECT id_solicitud FROM solicitud_detalle_comentario WHERE numero_control = ? AND estatus = 4";

	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$numero_control_usuario);
		
		$stmt->execute();
		
		$stmt->bind_result($id_solicitud);
		
		while($stmt->fetch()){
			
			$solicitudes_validadas[] = array(
				"id_solicitud" => $id_solicitud
			);

		}
		
		$stmt->close();
	}
	
	function udiffCompare($a, $b){
		return $a['id_solicitud'] - $b['id_solicitud'];
	}

	$arrdiff = array_udiff($solicitudes_generales, $solicitudes_validadas, 'udiffCompare');
	
	$i = 0;
	foreach($arrdiff as $ar){
		$respuesta[$i] = $ar;
		$i++;
	}
	
?>
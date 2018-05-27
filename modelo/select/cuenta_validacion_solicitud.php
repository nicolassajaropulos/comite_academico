<?PHP

	$id_solicitud = $_GET['id_solicitud'];

	$query = "SELECT COUNT(id_solicitud_detalle_comentario) as aceptadas FROM solicitud_detalle_comentario WHERE id_solicitud = ? AND estatus = 2";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param('i',$id_solicitud);
		
		$stmt->execute();
		
		$stmt->bind_result($aceptadas);
		
		while($stmt->fetch()){
			
		}
		
		$stmt->close();
		
	}
	
	$query2 = "SELECT COUNT(id_solicitud_detalle_comentario) as rechazadas FROM solicitud_detalle_comentario WHERE id_solicitud = ? AND estatus = 3";
	
	if($stmt = $mysqli->prepare($query2)){
		
		$stmt->bind_param('i',$id_solicitud);
		
		$stmt->execute();
		
		$stmt->bind_result($rechazadas);
		
		while($stmt->fetch()){
			
		}
		
		$stmt->close();
		
	}
	
	$respuesta = array(
		"aceptadas" => $aceptadas,
		"rechazadas" => $rechazadas
	);
	
	
	return $respuesta;
	
?>
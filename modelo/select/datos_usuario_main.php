<?PHP

	$numero_control = $_SESSION['numero_control'];
	
	$respuesta = array();
	
	$query = "SELECT 
					u.numero_control, 
					CONCAT_WS(' ', u.nombre_usuario, u.apellido_paterno, u.apellido_materno) as nombre_usuario, 
					u.puesto, 
					p.prioridad 
				FROM 
					usuario u
				INNER JOIN
					prioridad p
				ON
					u.prioridad = p.id_prioridad
				WHERE 
					numero_control = ?";
					
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$numero_control);
		
		$stmt->execute();
		
		$stmt->bind_result($numero_control,$nombre_usuario,$puesto,$prioridad);
		
		while($stmt->fetch()){
			
			$respuesta[] = array(
				"numero_control" => $numero_control,
				"nombre_usuario" => $nombre_usuario,
				"puesto" => $puesto,
				"prioridad" => $prioridad
			);
			
		}
	}
	
	return $respuesta;

?>
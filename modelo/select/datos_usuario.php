<?PHP

	$numero_control = $_SESSION['numero_control'];
	$nombre_usuario = $_SESSION['nombre_usuario'];
	$prioridad = $_SESSION['prioridad'];
	
	$respuesta = array();
	
	$query = "SELECT 
					c.id_carrera,c.nombre_carrera 
				FROM 
					carrera c 
				INNER JOIN
					usuario_carrera cu
				ON
					c.id_carrera = cu.id_carrera
				WHERE
					cu.numero_control = ?";
					
	if($stmt = $mysqli -> prepare($query)){
		
		$stmt->bind_param('i',$numero_control);
		
		$stmt->execute();
		
		$stmt->bind_result($id_carrera,$nombre_carrera);
		
		while($stmt->fetch()){
			
			$respuesta = array (
				"numero_control" => $numero_control,
				"nombre_usuario" => $nombre_usuario,
				"prioridad" => $prioridad,
				"id_carrera" => $id_carrera,
				"nombre_carrera" => $nombre_carrera
			);
			
		}
		
		$stmt->close();
		
	}
	
	return $respuesta;
	

?>
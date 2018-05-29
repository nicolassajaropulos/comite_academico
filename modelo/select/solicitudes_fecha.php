<?PHP

	$anio = $_GET['anio'];
	$mes = $_GET['mes'];

	$respuesta = array();
	
	$query = "SELECT 
					s.id_solicitud,
					s.solicitud,
					CONCAT_WS(' ',u.nombre_usuario,u.apellido_paterno,u.apellido_materno) as nombre_usuario,
					u.prioridad,
					s.fecha_creacion
				FROM 
					solicitud s
				INNER JOIN 
					usuario u
				ON
					s.interesado = u.numero_control
				WHERE
					YEAR(s.fecha_creacion) = ?
				AND
					MONTH(s.fecha_creacion) = ?";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("ss",$anio,$mes);
		
		$stmt->execute();
		
		$stmt->bind_result($id_solicitud,$solicitud,$nombre_usuario,$prioridad, $fecha_creacion);
		
		while($stmt->fetch()){
			
			$respuesta[] = array(
				"id_solicitud" => $id_solicitud,
				"solicitud" => $solicitud,
				"nombre_usuario" => $nombre_usuario,
				"prioridad" => $prioridad,
				"fecha_creacion" => $fecha_creacion
			);
			
		}
		
	}
	
	return $respuesta;
	
?>
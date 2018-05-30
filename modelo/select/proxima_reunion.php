<?PHP
	
	$estatus = 1;
	
	$fecha_actual = date('Y-m-d');
	$hora_actual = date("H:i:s");

	$respuesta = array();
	
	$query = "SELECT 
					r.fecha_citada, r.hora_inicio
				FROM
					reunion r
				WHERE
					r.estatus = ?
				AND
					r.fecha_citada  >= ?
				AND
					r.hora_inicio >= ?
				ORDER BY 
					r.fecha_citada
				LIMIT 1";
					
	if($stmt = $mysqli -> prepare($query)){
		
		$stmt->bind_param("iss",$estatus,$fecha_actual,$hora_actual);
		
		$stmt->execute();
		
		$stmt->bind_result($fecha,$hora_inicio);
		
		while($stmt->fetch()){
			$respuesta[] = array(
				"fecha" => $fecha,
				"hora_inicio" => $hora_inicio
			);
		}
		
		$stmt->close();
	
	}
	
	return $respuesta;
	
?>
<?PHP

	$respuesta = array();
	
	$query = "SELECT 
					r.id_reunion, CONCAT_WS(' ',u.nombre_usuario,u.apellido_paterno,u.apellido_paterno) as nombre, r.fecha_citada, r.hora_inicio, r.hora_finalizada 
				FROM 
					reunion r
				INNER JOIN 
					usuario u
				ON 
					s.numero_control = u.numero_control";
					
	if($stmt = $mysqli -> prepare($query)){
		
		$stmt->execute();
		$stmt->bind_result($id_reunion,$nombre_convocador,$fecha,$hora_inicio,$hora_fin);
		$stmt->close();
		
	}
	
	$respuesta[] = array(
		"id_reunion" => $id_reunion,
		"nombre_convocador" => $nombre_convocador,
		"fecha" => $fecha,
		"hora_inicio" => $hora_inicio,
		"hora_fin" => $hora_fin,
	);

?>
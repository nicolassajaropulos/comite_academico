<?PHP

	$estatus = 1;
	
	$respuesta = array();
	
	$query = "SELECT 
					r.id_reunion, CONCAT_WS(' ',u.nombre_usuario,u.apellido_paterno,u.apellido_paterno) as nombre, r.fecha_citada, r.hora_inicio, r.hora_finalizada 
				FROM 
					reunion r
				INNER JOIN 
					usuario u
				ON 
					r.numero_control = u.numero_control
				WHERE
					r.estatus = ?
				ORDER BY 
					r.fecha_citada";
					
	if($stmt = $mysqli -> prepare($query)){
		
		$stmt->bind_param("i",$estatus);
		
		$stmt->execute();
		
		$stmt->bind_result($id_reunion,$nombre_convocador,$fecha,$hora_inicio,$hora_fin);
		
		while($stmt->fetch()){
			$respuesta[] = array(
				"id_reunion" => $id_reunion,
				"nombre_convocador" => $nombre_convocador,
				"fecha" => $fecha,
				"hora_inicio" => $hora_inicio,
				"hora_fin" => $hora_fin
			);
		}
		
		$stmt->close();
	
	}
	
?>
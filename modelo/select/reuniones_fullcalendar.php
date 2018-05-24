<?PHP

	require_once '../conexion.php';
	
	$respuesta = array();
	
	$query = "SELECT 
					r.id_reunion, CONCAT_WS(' ',u.nombre_usuario,u.apellido_paterno,u.apellido_paterno) as nombre, r.fecha_citada, r.hora_inicio, r.hora_finalizada 
				FROM 
					reunion r
				INNER JOIN 
					usuario u
				ON 
					r.numero_control = u.numero_control";
					
	if($stmt = $mysqli -> prepare($query)){
		
		$stmt->execute();
		$stmt->bind_result($id_reunion,$nombre_convocador,$fecha,$hora_inicio,$hora_fin);
		while($stmt->fetch()){
			$respuesta[] = array(
				"title" => "Reunion No.".$id_reunion,
				"start" => $fecha."T".$hora_inicio,
				"end" => $fecha."T".$hora_fin,
				"id_reunion" => $id_reunion
			);
		}
		$stmt->close();
	
	}
	
	echo json_encode($respuesta);
	
?>
<?PHP

	$id_reunion = $_GET['id_reunion'];
	
	$respuesta = array();
	
	$query = "SELECT 
					r.numero_control, r.fecha_citada, r.hora_inicio, r.hora_finalizada, r.estatus, l.nombre_lugar 
				FROM 
					reunion r
				INNER JOIN
					lugar l
				ON
					r.id_lugar = l.id_lugar
				WHERE 
					id_reunion = ?";

	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_reunion);
		
		$stmt->execute();
		
		$stmt->bind_result($numero_control, $fecha_citada, $hora_inicio, $hora_finalizada, $estatus, $nombre_lugar);
		
		while($stmt->fetch()){
			
			$respuesta = array(
				"numero_control" => $numero_control,
				"fecha_citada" => $fecha_citada,
				"hora_inicio" => $hora_inicio,
				"hora_finalizada" => $hora_finalizada,
				"estatus" => $estatus,
				"nombre_lugar" => $nombre_lugar
			);
			
		}
		
	}
	
	return $respuesta;
	
?>
<?PHP

	$id_solicitud = $_GET['id_solicitud'];

	$respuesta = array();
	
	$query = "SELECT 
					c.comentario
				FROM 
					solicitud_detalle_comentario sc
				INNER JOIN
					comentario c
				ON
					sc.id_comentario = c.id_comentario
				WHERE
					sc.id_solicitud = ?
				AND
					sc.estatus = 1
				";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_solicitud);
		
		$stmt->execute();
		
		$stmt->bind_result($comentario);
		
		while($stmt->fetch()){
			
			$respuesta = array(
				"comentario" => $comentario
			);
			
		}
		
		$stmt->close();
	}
	
	return $respuesta;
	
?>
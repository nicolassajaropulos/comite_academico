<?PHP

	$id_solicitud = $_GET['id_solicitud'];
	
	$respuesta = array();
	
	$query = "SELECT sc.id_solicitud_detalle_comentario, sc.id_comentario, c.comentario
				FROM 
					solicitud_detalle_comentario sc 
				INNER JOIN 
					comentario c 
				ON
					sc.id_comentario = c.id_comentario
				WHERE
					sc.id_solicitud = ?
				AND
					sc.estatus = 4";

	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_solicitud);
		
		$stmt->execute();
		
		$stmt->bind_result($id_solicitud_detalle_comentario,$id_comentario,$comentario);
		
		while($stmt->fetch()){
			$respuesta = array(
				"id_solicitud_detalle_comentario" => $id_solicitud_detalle_comentario,
				"id_comentario" => $id_comentario,
				"comentario" => $comentario
			);
		}
		
		$stmt->close();
		
	}
	
	return $respuesta;
	
?>
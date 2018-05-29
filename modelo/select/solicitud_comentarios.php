<?PHP

	$id_solicitud = $_GET['id_solicitud'];

	$respuesta = array();
	
	$query = "SELECT
					c.comentario,
					CONCAT_WS(' ',u.nombre_usuario,u.apellido_paterno,u.apellido_materno) as nombre_usuario,
					sc.estatus
				FROM
					solicitud_detalle_comentario sc
				INNER JOIN
					usuario u
				ON
					sc.numero_control = u.numero_control
				INNER JOIN
					comentario c
				ON
					sc.id_comentario = c.id_comentario
				WHERE
					sc.id_solicitud = ?
				AND
					(sc.estatus = 2
				OR
					sc.estatus = 3)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("i",$id_solicitud);
		
		$stmt->execute();
		
		$stmt->bind_result($comentario,$nombre_usuario,$estatus);

		while($stmt->fetch()){
			
			$respuesta[] = array(
				"comentario" => $comentario,
				"nombre_usuario" => $nombre_usuario,
				"estatus" => $estatus
			);
			
		}
		
	}
	
	return $respuesta;
	
?>
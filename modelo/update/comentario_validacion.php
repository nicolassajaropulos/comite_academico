<?PHP

	$id_comentario = $_PUT['id_comentario'];
	$comentario = $_PUT['comentario'];
	
	$query = "UPDATE comentario SET comentario = ? WHERE id_comentario = ?";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param('si',$comentario, $id_comentario);
		
		$stmt->execute();
		
		$stmt->close();
		
	}

	$respuesta = 1;
?>
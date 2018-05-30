<?PHP

	if($_POST['session'] == "4"){
		
		$id_usuario = $_POST['id_estudiante'];
		$coordinador = $_POST['coordinador'];
		$solicitud = $_POST['solicitud'];
		$motivos_academicos = $_POST['motivos_academicos'];
		$motivos_personales = $_POST['motivos_personales'];
		$motivos_otros = $_POST['motivos_otros'];

	}else{
		
		$id_usuario = $_POST['id_profesor'];
		$coordinador = $_POST['coordinador'];
		$solicitud = $_POST['solicitud'];
		$motivos_academicos = $_POST['motivos_academicos'];
		$motivos_personales = "";
		$motivos_otros = "";
		
	}

	$evidencias = $_POST['evidencias'];
	

	$query = "Call almacenar_solicitud(?,?,?,?,?,?, @id__solicitud)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("iissss",$id_usuario,$coordinador,$solicitud,$motivos_academicos,$motivos_personales, $motivos_otros);
		
		$stmt->execute();
		
		$stmt->close();
		
	}

	$query = "SELECT @id__solicitud AS id_solicitud";

	if ($stmt = $mysqli->prepare($query)) {
		$stmt->execute();
		$stmt->bind_result($id_solicitud);
		while ($stmt->fetch()) {}
		$stmt->close();
	}

	foreach ($evidencias as $id_usuario_evidencia) {
		
		$query = "UPDATE `usuario_evidencia` SET `id_solicitud` = ? WHERE id_usuario_evidencia = ?";

		if($stmt = $mysqli->prepare($query)){
			$stmt->bind_param("ii", $id_solicitud, $id_usuario_evidencia);
			$stmt->execute();
			$stmt->close();
			
		}

	}
	
	$respuesta = $_POST['session'];
?>
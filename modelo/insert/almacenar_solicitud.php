<?PHP

	if($_POST['session'] == 4){
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
	

	$query = "Call almacenar_solicitud(?,?,?,?,?,?)";
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("iissss",$id_usuario,$coordinador,$solicitud,$motivos_academicos,$motivos_personales, $motivos_otros);
		
		$stmt->execute();
		
		$stmt->close();
		
	}
	
	$respuesta = 1;
?>
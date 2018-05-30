<?php 

	if (!empty($_FILES)) {

		$id_usuario = $_SESSION['numero_control'];

		$tempFile = $_FILES['file']['tmp_name'];
		$filename = $_FILES['file']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);         
      
		$targetPath = dirname(__FILE__).'/../../imagenes/evidencias/';
		 
		$microtime = microtime();//Timesamp actual del servidor en millonesimas de segundo
		$file_name = "$microtime $filename";//Crea un string con el timestamp y el id del cliente consultado actuando como un salt
		$hash = hash_hmac('gost', $file_name, '743ded31b755c09a3cad90ef3e5f4379e22708e1e30aa543cebaed8cf03a2ad6c090033a780ae243');//Generacion de un hash con el string unico y "peper" o clave secreta en codigo duro

		$nombre_archivo_adjunto = $hash.'.'.$ext;

		$targetFile =  $targetPath.$nombre_archivo_adjunto;

		$id_evidencia = 0;

		if(move_uploaded_file($tempFile,$targetFile)){

			if (isset($_POST['id_solicitud']) && $_POST['id_solicitud'] > 0) {
				
				$query = "INSERT INTO `usuario_evidencia`(`id_usuario_evidencia`, `numero_control`, `id_solicitud`, `evidencia`, `fecha_creacion`, `estatus`) VALUES 
					(NULL, ?, ?, ?, NOW(), 1)";

				if ($stmt = $mysqli->prepare($query)) {
					$stmt->bind_param("iis", $id_usuario, $_POST['id_solicitud'], $nombre_archivo_adjunto);
					$stmt->execute();
					$id_evidencia = $mysqli->insert_id;
					$stmt->close();
				}

			} else {
				$query = "INSERT INTO `usuario_evidencia`(`id_usuario_evidencia`, `numero_control`, `id_solicitud`, `evidencia`, `fecha_creacion`, `estatus`) VALUES 
					(NULL, ?, NULL, ?, NOW(), 1)";

				if ($stmt = $mysqli->prepare($query)) {
					$stmt->bind_param("is", $id_usuario, $nombre_archivo_adjunto);
					$stmt->execute();
					$id_evidencia = $mysqli->insert_id;
					$stmt->close();
				}
			}

		}

		$respuesta = json_encode(Array("evidencia" => $id_evidencia, "solicitud" => $_POST['id_solicitud']));

	}

?>
<?php 

	if (!empty($_FILES)) {

		$id_usuario = $_SESSION['numero_control'];

		$tempFile = $_FILES['file']['tmp_name'];           
      
		$targetPath = dirname(__FILE__).'/../../imagenes/evidencias/';
		 
		$targetFile =  $targetPath.$_FILES['file']['name'];

		if(move_uploaded_file($tempFile,$targetFile)){

			// $query = "INSERT INTO evidencias";

			// if ($stmt = $mysqli->prepare($query)) {
			// 	# code...
			// }

		}

	}

?>
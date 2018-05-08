<?PHP
	
	require_once 'conexion.php';
	
	$coincidencias = 0;
	
	$numero_control = $_POST['numero_control'];
	$password = $_POST['password'];
	
	$query = "SELECT COUNT(id_usuario)
				FROM 
					usuario 
				WHERE 
					numero_control = ? 
				AND 
					contraseña = ?";
					
	
	if($stmt = $mysqli->prepare($query)){
		
		$stmt->bind_param("is",$numero_control,$password);
		$stmt->execute();
		$stmt->bind_result($coincidencias);
		while($stmt->fetch()){
			
		}
		$stmt->close();
	}
	
	if($coincidencias > 0){
		
		$query = "SELECT id_usuario, nombre_usuario, apellido_paterno, apellido_materno, numero_control, prioridad 
					FROM 
						usuario 
					WHERE 
						numero_control = ? 
					AND 
						contraseña = ?";
						
		
		if($stmt = $mysqli->prepare($query)){
			
			$stmt->bind_param("is",$numero_control,$password);
			$stmt->execute();
			$stmt->bind_result($id_usuario, $nombre_usuario, $apellido_paterno, $apellido_materno, $numero_control, $prioridad);
			while($stmt->fetch()){
				
			}
			$stmt->close();
		}
		
		session_start();
		
		$_SESSION['id_usuario'] = $id_usuario ;
		$_SESSION['nombre_usuario'] = $nombre_usuario.' '.$apellido_paterno.' '.$apellido_materno ;
		$_SESSION['numero_control'] = $numero_control ;
		$_SESSION['prioridad'] = $prioridad ;
		
		$response["error"] = false;
		$response["message"] = "OK";
		$response["data"] = null;
		$response["status"] = "200";
		
		echo json_encode($response);
		
	}else{
		
		$response["error"] = true;
		$response["message"] = "Nombre de usuario o contraseña Incorrecta";
		$response["data"] = null;
		$response["status"] = "400";
		
		echo json_encode($response);
	}
	
?>
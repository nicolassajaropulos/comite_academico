<?PHP

	$numero_control = $_SESSION['numero_control'];
	
	$respuesta = array();
	
	$id_carrera = "";
	
	$query = "SELECT 
					c.id_carrera
				FROM 
					carrera c 
				INNER JOIN
					usuario_carrera cu
				ON
					c.id_carrera = cu.id_carrera
				WHERE
					cu.numero_control = ?";
					
	if($stmt = $mysqli -> prepare($query)){
		
		$stmt->bind_param('i',$numero_control);
		
		$stmt->execute();
		
		$stmt->bind_result($id_carrera);
		
		while($stmt->fetch()){
			
		}
		
		$stmt->close();
		
	}
	
	$query = "SELECT 
					u.numero_control
				FROM 
					usuario u 
				INNER JOIN
					usuario_carrera cu
				ON
					u.numero_control = cu.numero_control
				WHERE
					cu.id_carrera = ? AND u.prioridad = 6";
					
	if($stmt = $mysqli -> prepare($query)){
		
		$stmt->bind_param('i',$id_carrera);
		
		$stmt->execute();
		
		$stmt->bind_result($numero_control_coordinador);
		
		while($stmt->fetch()){
			
		}
		
		$stmt->close();
		
	}
	
	return $respuesta = $numero_control_coordinador;
	

?>
<?PHP

	$id_solicitud = $_PUT['id_solicitud'];
	$estatus = $_PUT['estatus'];
	
	$query = "UPDATE solicitud SET estatus = ? WHERE"

?>
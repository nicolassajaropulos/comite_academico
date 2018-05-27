<?php 

	require_once '../conexion.php';

	$respuesta = Array();
	$query = "SELECT id_lugar, nombre_lugar FROM lugar WHERE estatus = 1";
	if ($stmt = $mysqli->prepare($query)) {
		$stmt->execute();
		$stmt->bind_result($id_lugar, $nombre_lugar);
		while ($stmt->fetch()) {
			$respuesta[] = Array(
				"id_lugar" => $id_lugar,
				"nombre_lugar" => $nombre_lugar
			);
		}
		$stmt->close();
	}

	echo json_encode($respuesta);

?>
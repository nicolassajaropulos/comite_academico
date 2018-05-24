<?php 

	$id_reunion = validate_int($_PUT['id_reunion']);
	$respuesta = 'Hubo un problema al actualizar la reunión';

	if ($id_reunion) {

		/* ACTUALIZA EL ESTATUS DE LA REUNION A CANCELADO */

		$query = "UPDATE reunion SET estatus = 0 WHERE id_reunion = ?";
		if ($stmt = $mysqli->prepare($query)) {
			$stmt->bind_param("i", $id_reunion);
			$stmt->execute();
			$stmt->close();
		}

		/* BUSCA SOLICITUDES RELACIONADAS A DICHA REUNION */

		$solicitudes_reunion = Array();

		$query = "SELECT `id_reunion_solicitud`, `id_solicitud` FROM `reunion_solicitud` WHERE id_reunion = ?";
		if ($stmt = $mysqli->prepare($query)) {
			$stmt->bind_param("i", $id_reunion);
			$stmt->execute();
			$stmt->bind_result($id_reunion_solicitud, $id_solicitud);
			while ($stmt->fetch()) {
				$solicitudes_reunion[] = Array(
					"id_reunion_solicitud" => $id_reunion_solicitud,
					"id_solicitud" => $id_solicitud
				);
			}
			$stmt->close();
		}

		/* SE ACTUALIZAN LAS SOLICITUDES QUE HAYAN SIDO RELACIONADAS A DICHA REUNIÓN */

		$query = "UPDATE solicitud SET id_estatus= ? WHERE id_solicitud = ?";
		$STATUS_WAIT_FOR_SCHEDULE = 2;
		
		foreach ($solicitudes_reunion as $solicitud) {

			if ($stmt = $mysqli->prepare($query)) {
				$stmt->bind_param("ii", $STATUS_WAIT_FOR_SCHEDULE, $solicitud['id_solicitud']);
				$stmt->execute();
				$stmt->close();
			}

		}

		$respuesta = 'Reunión desagendada';

	}

?>
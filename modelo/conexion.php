<?PHP

	$mysqli = new mysqli('localhost', 'root', '', 'comite_academico');

	mysqli_set_charset($mysqli, "utf8");

	if (mysqli_connect_errno()){
		printf("La conexion fallo: %s\n", mysqli_connect_error());
		exit();
	}
?>

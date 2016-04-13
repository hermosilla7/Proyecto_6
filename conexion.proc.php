<?php
	error_reporting(0);
	$con = mysqli_connect("localhost", "root", "", "asociacion");

	//si no se puede realizar la conexión, mostramos error
	if (!$con) {
		echo "Error: No se puede conectar a la BD." . PHP_EOL;
		exit;
	}
?>

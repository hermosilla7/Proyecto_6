<?php
	session_start();
	error_reporting(0);
	include_once 'conexion.proc.php';	

	// $nomUsuari = $_SESSION['nombre'];
	// $user_id = $_SESSION['id'];
	$usuario_id = $_REQUEST['id'];

	
	$sql_update="update cliente set activo = 0 where id = $usuario_id";

		mysqli_query($con,$sql_update)
		  or die("Problemas en el update".mysqli_error($con));

		mysqli_close($con);


	header("Location: clientes_admin.php");
?>
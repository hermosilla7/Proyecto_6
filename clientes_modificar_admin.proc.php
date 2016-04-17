<?php
	session_start();
	error_reporting(0);
	include_once 'conexion.proc.php';

	$nomUsuari = $_SESSION['nombre'];
	$cliente_id = $_REQUEST['id'];

	$foto_new=$_FILES["foto"]["name"];
			$ruta_new=$_FILES["foto"]["tmp_name"];
			$destino_new="img/avatar/".$foto_new;
			copy($ruta_new, $destino_new);


	if ($foto_new != "") {
		$sql = "UPDATE cliente SET nombre='$_REQUEST[nombre]', apellidos='$_REQUEST[apellidos]', correo='$_REQUEST[correo]', dni='$_REQUEST[dni]', direccion='$_REQUEST[direccion]', telefono='$_REQUEST[telefono]', img='$foto_new' WHERE id = $cliente_id";
	}
	else{
		$sql = "UPDATE cliente SET nombre='$_REQUEST[nombre]', apellidos='$_REQUEST[apellidos]', dni='$_REQUEST[dni]', direccion='$_REQUEST[direccion]', telefono='$_REQUEST[telefono]', correo='$_REQUEST[correo]' WHERE id = $cliente_id";
	}

	//lanzamos la sentencia sql
	$datos = mysqli_query($con, $sql);

	header("location: clientes_admin.php")

?>

<?php
	include 'footer.php';
?>

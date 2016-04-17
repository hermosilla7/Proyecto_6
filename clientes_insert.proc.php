<?php
	include_once 'conexion.proc.php';
	error_reporting(0);
?>
<html>
	<body>
		<?php
			$consulta_id_usuario = "SELECT max(id+1) AS 'siguiente' FROM cliente";
			$result_id_usuario = mysqli_query($con, $consulta_id_usuario);
			$id_siguiente = mysqli_fetch_array($result_id_usuario);
			$foto_nombre_id = $id_siguiente['siguiente'];
			$foto=$_FILES['foto']['name'];
			$ruta=$_FILES['foto']['tmp_name'];
			$tips = 'jpg';
			$type = array('image/jpeg' => 'jpg');
			if ($foto_nombre_id == NULL) {
				$foto_nombre_id = 1;
			}
			$name = $foto_nombre_id.'.'.$tips;
			$destino =  "img/".$name;
			copy($ruta, $destino);
			//
			$sql = "INSERT INTO cliente (nombre, apellidos, dni, correo, direccion, telefono, img, activo) VALUES ('$_REQUEST[nombre]', '$_REQUEST[apellidos]', '$_REQUEST[dni]', '$_REQUEST[correo]', '$_REQUEST[direccion]', '$_REQUEST[telefono]', '$name' , '1')";
			$sql=utf8_decode($sql);
			//lanzamos la sentencia sql
			mysqli_query($con, $sql);

			$message = 'Cliente dado de alta';
			echo "<SCRIPT type='text/javascript'> //not showing me this
		        alert('$message');
		        window.location.replace(\"principal.php\");
		    </SCRIPT>";
		?>
	</body>
</html>

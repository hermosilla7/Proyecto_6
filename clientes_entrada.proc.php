<?php
	include_once 'conexion.proc.php';
	$cliente_id = $_REQUEST['id'];
	error_reporting(0);
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en BD</title>
	</head>
	<body>
		<?php
			$fecha_actual = date("Y-m-d H:i:s");
			$sql = "INSERT INTO entrada (cliente_id, fecha) VALUES ($cliente_id, '$fecha_actual')";
			$sql=utf8_decode($sql);
			//lanzamos la sentencia sql
			mysqli_query($con, $sql);
			echo "ENTRA";
			$message = 'Cliente dado de alta';
			// echo "<SCRIPT type='text/javascript'> //not showing me this
		 //        alert('$message');
		 //        window.location.replace(\"index.php\");
		 //    </SCRIPT>";
		?>
	</body>
</html>

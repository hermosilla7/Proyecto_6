<?php
	include 'header.php';
	$cliente_id = $_REQUEST['id'];
	$consulta_usuarios = "SELECT * FROM cliente where id = $cliente_id";
	$result_usuarios = mysqli_query($con, $consulta_usuarios);

	if(mysqli_num_rows($result_usuarios)>0){
		$cliente=mysqli_fetch_array($result_usuarios);
?>
<br></br><br>
	<div class="mod-form">		
 		<div class="form-group ">
			<form name="f1" action="clientes_modificar_admin.proc.php?id=<?php echo $_REQUEST['id']; ?>" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				<div class="form-group">
					<i class="fa fa-user"></i><input type="text" name="nombre" class="form-control" value="<?php echo utf8_encode($cliente['nombre']); ?>"><br>
				</div>
				<div class="form-group">
					<i class="fa fa-user"></i><input type="text" name="apellidos" class="form-control" value="<?php echo utf8_encode($cliente['apellidos']); ?>"><br>
				</div>
				<div class="form-group">
					<i class="fa fa-list-alt"></i><input type="text" name="dni" class="form-control" value="<?php echo $cliente['dni']; ?>"><br>
				</div>
				<div class="form-group">
					<i class="fa fa-at"></i><input type="text" name="correo" class="form-control" value="<?php echo $cliente['correo']; ?>"><br>
				</div>
				<div class="form-group">
					<i class="fa fa-street-view"></i><input type="text" name="direccion" class="form-control" value="<?php echo utf8_encode($cliente['direccion']); ?>"><br>
				</div>
				<div class="form-group">
					<i class="fa fa-phone"></i><input type="tel" name="telefono" class="form-control" value="<?php echo $cliente['telefono']; ?>"><br>
				</div>
				Imagen:
				<?php		
					$fichero="img/$cliente[img]";
					$foto = $cliente['img'];					
					echo "<img src='$fichero' width='50' heigth='50' ></div></br>";
				?>			
				<input type="file" name="foto" class="form-control" id="foto"></br>
				<input type="hidden" name="id_usuario_seleccionado" value="<?php echo $id_anterior; ?>">
				<input id="boton" type="submit" class="log-btn" value="Guardar cambios" onClick="validar()">
			</form>
<?php
	}
?>
		</div>
	</div>	
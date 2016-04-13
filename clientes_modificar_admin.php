<?php
	include 'conexion.proc.php';
	$cliente_id = $_REQUEST['id'];
	$consulta_usuarios = "SELECT * FROM cliente where id = $cliente_id";
	$result_usuarios = mysqli_query($con, $consulta_usuarios);

	if(mysqli_num_rows($result_usuarios)>0){
		$cliente=mysqli_fetch_array($result_usuarios);
?>
	<script>
		function valEmail(valor){
			re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*[.]([a-z]{2,3})$/
			if(!re.exec(valor)) {
				return false;
			}else{
				return true;
			}
		}

		function validar(){
			enviar=false;
			if(f1.pass.value==f1.repass.value){
				if(valEmail(f1.correo.value)){
					enviar=true;
				} else {
					alert("El email " + f1.correo.value + " es incorrecto.");
					enviar=false;
				}
			}
			return enviar;
		}
	</script>
			<div class="titleact">
        <h1>Edición de perfil</h1>
    </div>
	<div class="mod-form">
		
 		<div class="form-group ">
			<form name="f1" action="clientes_modificar_admin.proc.php?id=<?php echo $_REQUEST['id']; ?>" method="post" enctype="multipart/form-data" onsubmit="return validar();">
				<div class="form-group">
					Nombre:<i class="fa fa-user"></i><input type="text" name="nombre" class="form-control" value="<?php echo $cliente['nombre']; ?>"><br>
				</div>
				<div class="form-group">
					Apellidos:<i class="fa fa-user"></i><input type="text" name="apellidos" class="form-control" value="<?php echo $cliente['apellidos']; ?>"><br>
				</div>
				<div class="form-group">
					DNI:<i class="fa fa-lock"></i><input type="text" name="dni" class="form-control" value="<?php echo $cliente['dni']; ?>"><br>
				</div>
				<div class="form-group">
					Correo:<i class="fa fa-at"></i><input type="text" name="correo" class="form-control" value="<?php echo $cliente['correo']; ?>"><br>
				</div>
				Imagen:
				<?php		
					$fichero="img/$cliente[img]";
					$foto = $cliente['img'];					
					echo "<img src='$fichero' width='50' heigth='50' ></div></br>";
				?>			
				<input type="file" name="foto" class="form-control" id="foto"></br><br>
				<input type="hidden" name="id_usuario_seleccionado" value="<?php echo $id_anterior; ?>">
				<input id="boton" type="submit" class="log-btn" value="Guardar cambios" onClick="validar()">
				<button type="button" class="sign-btn" onClick="window.location.href='clientes_admin.php'">Volver</button>
			</form>
<?php
	}
?>
		</div>
	</div>	
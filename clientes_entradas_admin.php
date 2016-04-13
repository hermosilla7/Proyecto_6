<?php
	include 'conexion.proc.php';
	$cliente_id = $_REQUEST['id'];
	$consulta_usuarios = "SELECT * FROM entrada where cliente_id = $cliente_id";
	$result_usuarios = mysqli_query($con, $consulta_usuarios);

if(mysqli_num_rows($result_usuarios)==0){
	 echo '<b>No hay dato</b>';

	}else{

	 $cliente=mysqli_fetch_array($result_usuarios);
echo "<div class='clients'><b style='margin-top: 15px;'>Nombre:</b> ";
                echo utf8_encode($cliente['nombre']);
                echo "<br/>";
                echo "<b>Apellidos:</b> ";
                echo utf8_encode($cliente['apellidos']);
                echo "<br/>";
                echo "<b>DNI:</b> ";
                echo utf8_encode($cliente['dni']);
                echo "<br/>";
                Imagen:
                     
                    $fichero="img/$cliente[img]";
                    $foto = $cliente['img']; 
                    echo "<div id='img'><img src='$fichero' class='small' id='myImg'></div></div></br>";
?>
         
                    
        
                <div class="btns">
                <a href="clientes_modificar_admin.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                <a href="clientes_entradas_admin.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-sign-in fa-2x"></i></a>
                <a href="clientes_baja_admin.proc.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-user-times fa-2x"></i></a>
                </div>     
        <?php 
                echo "<br/></div><br/>";
                
            }
<html>
<head>

<!-- JQUERY -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Crunchify's Scroll to Top Script -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<?php

include 'conexion.proc.php';
include_once 'qr/src/QrCode.php';
include_once 'qr/Exceptions/QrCode.php';
include_once 'qr/Exceptions/.php';
include_once 'qr/Exceptions/.php';//incluir todos los de la carpeta exception
include_once 'qr/Exceptions/.php';
include_once 'qr/Exceptions/.php';


$codigo=$_POST['vcod'];

$consulta_usuarios="select * from cliente where id='".$codigo."'";
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

            $qrCode = new Endroid\QrCode\QrCode();
            $qrData = $qrCode
            ->setText('http://www.marca.com')//url insert con id concatenado
            ->setSize(300)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])
            ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
            ->setLabelFontSize(16)
            ->getDataUri();
            // echo $qrCode->getText();

            echo('<img src='.$qrData.'>');
?>
         
                    
        
                <div class="btns">
                <a href="clientes_modificar_admin.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                <a href="clientes_entradas_admin.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-sign-in fa-2x"></i></a>
                <a href="clientes_baja_admin.proc.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-user-times fa-2x"></i></a>
                </div>     
        <?php 
                echo "<br/></div><br/>";
                
            }
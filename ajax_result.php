<script type="text/javascript">
    function PrintElem(elem)
    {
        alert("printElemen");
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=50,width=50');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>

<?php
include 'conexion.proc.php';
include_once 'qr/src/QrCode.php';
include_once 'qr/Exceptions/QrCode.php';
include_once 'qr/Exceptions/.php';

$codigo=$_POST['vcod'];

$consulta_usuarios="select * from cliente where id='".$codigo."'";
$result_usuarios = mysqli_query($con, $consulta_usuarios);

if(mysqli_num_rows($result_usuarios)==0){
	 echo '<b>No hay dato</b>';

	}else{

	 $cliente=mysqli_fetch_array($result_usuarios);
     ?>
     <tr>
     <?php
                echo "<div id='clients'><b style='margin-top: 15px;'>Nombre:</b> ";
                echo utf8_encode($cliente['nombre']);
                echo "<br/>";
                echo "<b>Apellidos:</b> ";
                echo utf8_encode($cliente['apellidos']);
                echo "<br/>";
                echo "<b>DNI:</b> ";
                echo utf8_encode($cliente['dni']);
                echo "<br/>";
                echo "<b>Activo:</b> ";
                if ($cliente['activo'] == 1) {
                    echo "Si";
                }
                else{
                    echo "No";
                }
                echo "<br/>";
                Imagen:                     
                    $fichero="img/$cliente[img]";
                    $foto = $cliente['img']; 
                    echo "<div id='img'><img src='$fichero' class='small' id='myImg'></div></br>";
                    
            $qrCode = new Endroid\QrCode\QrCode();
            $qrData = $qrCode
            ->setText("http://192.168.1.130/Proyecto_6/clientes_entrada.proc.php?id=$cliente[id]")//url insert con id concatenado
            ->setSize(100)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])
            ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
            ->setLabelFontSize(16)
            ->getDataUri();
            echo('<div class=qr><img src='.$qrData.'></div></div>');
            echo "<br/>";
            echo "<br/>";
?>   
                <div class="btns">
                <a href="clientes_modificar_admin.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                <a href="clientes_entradas_admin.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-sign-in fa-2x"></i></a>
                <a href="clientes_baja_admin.proc.php?id=<?php echo $cliente['id']; ?>"><i class="fa fa-user-times fa-2x"></i></a>
                 <button onClick="PrintElem('#clients')">Imprimir carnet</button>  
                </div>     
        <?php 
                echo "<br/><br/>";
                
            }
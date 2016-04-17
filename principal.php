<?php
	include "header.php";
	include_once 'conexion.proc.php';
?>
<br></br><br></br>
Entradas de hoy:
<?php
    $fecha_actual = gmdate('Y-m-d'); 
    $consulta_clientes = "SELECT * FROM cliente";
    $consulta_entradas = "SELECT DATE_FORMAT(entrada.fecha,'%h:%i') AS hora_entrada, entrada.cliente_id, cliente.nombre AS 'nombre_cliente', cliente.apellidos AS 'apellidos_cliente' FROM entrada, cliente WHERE fecha LIKE '$fecha_actual%' AND entrada.cliente_id = cliente.id";
    $result_entradas = mysqli_query($con, $consulta_entradas);
    echo $fecha_actual;
    while ($entrada = mysqli_fetch_array($result_entradas)) {
    	 echo "<div class='users'><b style='margin-top: 15px;'>Hora:</b> ";
                    echo utf8_encode($entrada['hora_entrada']);
                    echo "<br/>";
                    echo "<b>Nombre:</b> ";
                    echo utf8_encode($entrada['nombre_cliente'].' '.$entrada['apellidos_cliente']);
                    echo "<br/></div>";
    }

?>
<?php
echo "<br/></div><br/>";
    include "footer.php";
?>
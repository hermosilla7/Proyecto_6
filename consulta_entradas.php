<?php
    include "conexion.proc.php";
    $consulta_entradas = "SELECT * FROM entrada";
    $result_entradas = mysqli_query($con, $consulta_entradas);
    $consulta_total_entradas = "SELECT sum(cantidad) AS 'total' FROM entrada";
    $result_total_entradas = mysqli_query($con, $consulta_total_entradas);
    $entrada_total = mysqli_fetch_array($result_total_entradas);
?>
    <div class="titleact">
        <h1>Donaciones</h1>
    </div>
    <div id="actividades" class="actividades">
        <div class="prin-img" style="margin-bottom: 15px;">

<?php
    echo "<div class='total'>";
    echo "</div>";
    $donacionesArray = [];
    while ($donacion = mysqli_fetch_array($result_entradas)) {
		$sql_usuario = "SELECT * FROM cliente WHERE $donacion[cliente_id] = cliente.id";
		$datos_usuario = mysqli_query($con, $sql_usuario);
		$usuario = mysqli_fetch_array($datos_usuario);

        echo "<div class='dona'>";
        echo "<b style='margin-top: 15px;'>Usuario:</b> ";
        echo utf8_encode($usuario['nombre'])." ".utf8_encode($usuario['apellidos']);      
        echo "<br/>";
        echo "<b>Fecha:</b> ";
        echo utf8_encode($donacion['fecha']);
        echo "<br/><br/>";
        echo "</div>";
    }

?>
            <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
        </div>
    </div>

<?php
include 'config.inc.php';
?>
<html>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Entradas en 2016'
        },
        subtitle: {
            text: 'Desglose por meses'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Donaciones (€)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total en este mes: <b>{point.y:.2f} €</b>'
        },
        series: [{
            name: 'Population',
            data: [
            <?php $db = new Conect_MySql();
			
            $sql_enero = "SELECT COALESCE(sum(cantidad),0) AS 'total_enero' FROM donacion WHERE fecha like '%-01-%'";
			$sql_febrero = "SELECT COALESCE(sum(cantidad),0) AS 'total_febrero' FROM donacion WHERE fecha like '%-02-%'";
			$sql_marzo = "SELECT COALESCE(sum(cantidad),0) AS 'total_marzo' FROM donacion WHERE fecha like '%-03-%'";
			$sql_abril = "SELECT COALESCE(sum(cantidad),0) AS 'total_abril' FROM donacion WHERE fecha like '%-04-%-%'";
			$sql_mayo = "SELECT COALESCE(sum(cantidad),0) AS 'total_mayo' FROM donacion WHERE fecha like '%-05-%'";
			$sql_junio = "SELECT COALESCE(sum(cantidad),0) AS 'total_junio' FROM donacion WHERE fecha like '%-06-%'";
			$sql_julio = "SELECT COALESCE(sum(cantidad),0) AS 'total_julio' FROM donacion WHERE fecha like '%-07-%'";
			$sql_agosto = "SELECT COALESCE(sum(cantidad),0) AS 'total_agosto' FROM donacion WHERE fecha like '%-08-%'";
			$sql_septiembre = "SELECT COALESCE(sum(cantidad),0) AS 'total_septiembre' FROM donacion WHERE fecha like '%-09-%'";
			$sql_octubre = "SELECT COALESCE(sum(cantidad),0) AS 'total_octubre' FROM donacion WHERE fecha like '%-10-%'";
			$sql_noviembre = "SELECT COALESCE(sum(cantidad),0) AS 'total_noviembre' FROM donacion WHERE fecha like '%-11-%'";
			$sql_diciembre = "SELECT COALESCE(sum(cantidad),0) AS 'total_diciembre' FROM donacion WHERE fecha like '%-12-%'";
			
			$result_enero = $db->execute($sql_enero);
			$result_febrero = $db->execute($sql_febrero);
			$result_marzo = $db->execute($sql_marzo);
			$result_abril = $db->execute($sql_abril);
			$result_mayo = $db->execute($sql_mayo);
			$result_junio = $db->execute($sql_junio);
			$result_julio = $db->execute($sql_julio);
			$result_agosto = $db->execute($sql_agosto);
            $result_septiembre = $db->execute($sql_septiembre);
			$result_octubre = $db->execute($sql_octubre);
			$result_noviembre = $db->execute($sql_noviembre);
			$result_diciembre = $db->execute($sql_diciembre);

			
			while ($row=$db->fetch_row($result_enero)){?>
			['ENERO', <?php echo $row['total_enero'] ?>],			
            <?php } ?>
			
			<?php
			while ($row=$db->fetch_row($result_febrero)){?>
			['FEBRERO', <?php echo $row['total_febrero'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_marzo)){?>
			['MARZO', <?php echo $row['total_marzo'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_abril)){?>
			['ABRIL', <?php echo $row['total_abril'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_mayo)){?>
			['MAYO', <?php echo $row['total_mayo'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_junio)){?>
			['JUNIO', <?php echo $row['total_junio'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_julio)){?>
			['JULIO', <?php echo $row['total_julio'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_agosto)){?>
			['AGOSTO', <?php echo $row['total_agosto'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_septiembre)){?>
			['SEPTIEMBRE', <?php echo $row['total_septiembre'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_octubre)){?>
			['OCTUBRE', <?php echo $row['total_octubre'] ?>],			
            <?php } ?><?php
			while ($row=$db->fetch_row($result_noviembre)){?>
			['NOVIEMBRE', <?php echo $row['total_noviembre'] ?>],			
            <?php } ?><?php
            while ($row=$db->fetch_row($result_diciembre)){?>
			['DICIEMBRE', <?php echo $row['total_diciembre'] ?>],			
            <?php } ?>
			]
        }]
    });
});
		</script>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>	
	



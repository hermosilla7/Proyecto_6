<?php
	include 'conexion.proc.php';
    include_once 'header.php';
	$cliente_id = $_REQUEST['id'];
	$consulta_entradas = "SELECT * FROM entrada WHERE cliente_id = $cliente_id ORDER BY fecha DESC";
	$result_entradas = mysqli_query($con, $consulta_entradas);
    //total de visitas
    $consulta_total_entradas = "SELECT COALESCE(count(id),0)  AS 'total' FROM entrada where cliente_id = $cliente_id";
    $result_total_entradas = mysqli_query($con, $consulta_total_entradas);
    $entrada_total = mysqli_fetch_array($result_total_entradas);

if(mysqli_num_rows($result_entradas)==0){
	 echo '<b>No hay entradas</b>';

	}else{
echo "<br><br/><br><br/>";
	while ($entrada=mysqli_fetch_array($result_entradas)) {
        echo "<div class='clients'>";
                echo utf8_encode($entrada['fecha']);
                echo "<br/></div><br/>";
     } ;
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
            type: 'column',
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
                text: 'Entradas (nº)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Total en este mes: <b>{point.y} </b>'
        },
        series: [{
            name: 'Population',
            data: [
            <?php $db = new Conect_MySql();
            
            $sql_enero = "SELECT COALESCE(count(id),0) AS 'total_enero' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-01-%'";            
            $sql_febrero = "SELECT COALESCE(count(id),0)  AS 'total_febrero' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-02-%'"; 
            $sql_marzo = "SELECT COALESCE(count(id),0)  AS 'total_marzo' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-03-%'"; 
            $sql_abril = "SELECT COALESCE(count(id),0)  AS 'total_abril' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-04-%'"; 
            $sql_mayo = "SELECT COALESCE(count(id),0)  AS 'total_mayo' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-05-%'"; 
            $sql_junio = "SELECT COALESCE(count(id),0)  AS 'total_junio' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-06-%'"; 
            $sql_julio = "SELECT COALESCE(count(id),0)  AS 'total_julio' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-07-%'"; 
            $sql_agosto = "SELECT COALESCE(count(id),0)  AS 'total_agosto' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-08-%'"; 
            $sql_septiembre = "SELECT COALESCE(count(id),0)  AS 'total_septiembre' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-09-%'"; 
            $sql_octubre = "SELECT COALESCE(count(id),0)  AS 'total_octubre' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-10-%'"; 
            $sql_noviembre = "SELECT COALESCE(count(id),0)  AS 'total_noviembre' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-11-%'"; 
            $sql_diciembre = "SELECT COALESCE(count(id),0)  AS 'total_diciembre' FROM entrada WHERE cliente_id = $cliente_id AND fecha like '%-12-%'"; 
            
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
<?php
include_once 'footer.php';
?>
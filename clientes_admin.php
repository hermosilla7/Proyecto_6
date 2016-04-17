<?php
    include_once 'conexion.proc.php';
    include_once 'header.php';
    $consulta_usuarios = "SELECT * FROM cliente where activo = 1";
    // $result_usuarios = mysqli_query($con, $consulta_usuarios);
?>
<!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Crunchify's Scroll to Top Script -->
        <link rel="stylesheet" type="text/css" href="css/small_big.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        </script>

<link rel="stylesheet" type="text/css" href="css/search_bar.css">
<script src="js/ajax.js"></script>
<script src="js/functions.js"></script>
<script type="text/javascript">
    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
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
</head>

<body>

<br /><br /><!-- <h1><b>Buscador usuarios</b></h1> -->
<br /><br />

<input type="text" id="bus" onkeyup="myFunction()" size="30" required="required" autofocus="autofocus" placeholder="Buscar" />

<div id="myDiv">
    </div>

<br />

<div id="pers"></div>
</body>

</html>
<?php
    include_once 'conexion.proc.php';
    $consulta_usuarios = "SELECT * FROM cliente where activo = 1";
    $result_usuarios = mysqli_query($con, $consulta_usuarios);
?>
<!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Crunchify's Scroll to Top Script -->
        <link rel="stylesheet" type="text/css" href="ejemplo_css.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        </script>

<link rel="stylesheet" type="text/css" href="estilos.css">

<script src="js/ajax.js"></script>
<script src="js/functions.js"></script>

</head>

<body>

<h1><b>Buscador usuarios</b></h1>
<br /><br />

<input type="text" id="bus" onkeyup="myFunction()" size="30" required="required" autofocus="autofocus" placeholder="Buscar" />

<div id="myDiv">
    </div>

<br />

<div id="pers"></div>
<button type="button" class="sign-btn" onclick="window.location.href='index.php'">Volver</button>
</body>

</html>
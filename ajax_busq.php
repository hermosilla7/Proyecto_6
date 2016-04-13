<?php

include 'conexion.proc.php';


$q=$_POST['q'];

$sql="select * from cliente where apellidos LIKE '".$q."%' LIMIT 0 , 5";
$res=mysqli_query($con, $sql);

if(mysqli_num_rows($res)==0){

 echo '<b>No hay sugerencias</b>';

}else{


 while($fila=mysqli_fetch_array($res)){

  echo '<div class="sugerencias" onclick="myFunction2('.$fila["id"].')">'.$fila['nombre'].' '.utf8_encode($fila['apellidos']).'</div>';

 }


}

?>
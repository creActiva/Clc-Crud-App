<?php
$config = parse_ini_file('config.ini'); 
$conexion = $con = mysqli_connect('localhost',$config['username'],'APeUo=*@xRX~',$config['dbname']); 
if($conexion === false) { 
   echo 'Ha habido un error <br>'.mysqli_connect_error(); 
} else {
}
?>
<?php
$host = "localhost";
$user = "root";
$password = "";

$conexion = mysqli_connect($host, $user, $password) or die("Error de conexión");

mysqli_select_db($conexion, "pruebaDeTest");

$mi_nombre = $_GET['nombre'];

$consultar = "SELECT nombre FROM clientes";

$registros = mysqli_query($conexion, $consultar);

$encontrado = false;

while($registro = mysqli_fetch_row($registros)){
    echo "Nombre: " . $mi_nombre;
    echo '<br />';
 
    if($registro[0] == $mi_nombre){
        $encontrado = true;
    }
}

if($encontrado){
    echo $mi_nombre . " se encuentra en la BBDD";
}else{
    echo "No se encuentra en la BBDD";
}

?>

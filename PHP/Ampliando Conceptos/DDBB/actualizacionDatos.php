<?php
$host = "localhost";
$user = "root";
$password = "";

$conexion = mysqli_connect($host, $user, $password) or die("Error de conexión");

mysqli_select_db($conexion, "pruebaDeTest");

$consultar = "SELECT nombre FROM clientes";
$registros = mysqli_query($conexion, $consultar);

$encontrado = false;

echo "<label for='seleccionar'> Elige un nombre: </label>";
echo "<select name='seleccionar' id='seleccionar'>";

while($registro = mysqli_fetch_row($registros)){

    echo "<option value=$registro[0]>" .$registro[0]. "</option>";

}

?>

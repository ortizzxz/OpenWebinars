<html>
    <body>
        <form action="insercionDatos.php" id="miFormu" method="get">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre">
                <br>
                <br>
                <input type="submit" value="Insertar">
            </p>
        </form>
    </body>
</html>

<?php
$host = "localhost";
$user = "root";
$password = "";

$conexion = mysqli_connect($host, $user, $password) or die("Error de conexión");

mysqli_select_db($conexion, "pruebaDeTest");

$mi_nombre = $_GET['nombre'];

$insertar = "INSERT INTO clientes(nombre) VALUES ('$mi_nombre')";

mysqli_query($conexion, $insertar);
?>

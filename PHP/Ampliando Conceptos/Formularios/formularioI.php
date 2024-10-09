<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form name="form1" method="post" action="formularioI.php">
            <p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario">
            </p>
            <p>
                <label for="usuario">Password</label>
                <input type="password" name="password" id="password">
            </p>

            <button type="submit" name="submit" > Enviar Info </button>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['usuario'])){
        if(!empty($_POST['usuario'])){
            $usuario = $_POST['usuario'];

            echo "Hola " . $usuario;
        }
    }
?>


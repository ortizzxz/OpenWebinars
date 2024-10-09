<?php
    session_start();

    $_SESSION['iniciada'] = true; 
    $_SESSION['nombre'] = "Jesus";
    $_SESSION['pais'] = "España";


    echo "<a href=\"SesionesII.php\">Comprobar sesiones en otra pestaña</a>";
    echo '<br>';
    echo "<a href=\"CerrarSesiones.php\">Finalizar la sesión</a>";

?>
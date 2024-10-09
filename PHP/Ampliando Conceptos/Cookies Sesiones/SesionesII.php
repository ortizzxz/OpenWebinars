<?php
    session_start();

    echo "Hola " . $_SESSION['nombre'];
    echo '</br>';
    echo "Del pais " . $_SESSION['pais'];
?>
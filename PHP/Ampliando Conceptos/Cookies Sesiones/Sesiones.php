<?php
    // una sesion es un DNI del usuario

    session_id("22");

    echo session_id();
    echo '<br/>';
    echo session_name();
    echo '<br/>';
    // inciar sesion 
    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Jesus";
    echo '<br/>';

    // var_dump($_SESSION);

    echo "Nombre " . $_SESSION['nombre'];
    echo '<br/>';
    
    //borrar valor de session 
    unset($_SESSION['nombre']);

    if(!isset($_SESSION['nombre'])){
        echo "Nombre no definido";
    }
?>
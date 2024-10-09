<?php
    session_start();

    if(isset($_SESSION['iniciada'])){
        session_unset();
        session_destroy();

    }else{
        echo "Variable no definida";
    }
?>
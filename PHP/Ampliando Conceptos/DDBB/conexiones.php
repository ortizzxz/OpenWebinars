<?php
    $host = "localhost";
    $user = "root";
    $password = "";

    $conexion = mysqli_connect($host, $user, $password);
    
    if(!$conexion){
        echo "error";
    } else{
        
        $sql = "CREATE DATABASE pruebaDeTest";

        if(mysqli_query($conexion, $sql)){
            echo "Base de datos creada con exito";
        }else{
            echo "error: " . mysqli_error($conexion);
        }

        mysqli_select_db($conexion, "pruebaDeTest");

        $sql2 = "CREATE TABLE clientes(nombre VARCHAR(20) )";
    
        mysqli_query($conexion, $sql2);
    }

?>
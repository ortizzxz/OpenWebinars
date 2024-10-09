<?php
    // chdir() -> change directory
    // getcwd() -> devuelve current directory
    // scandir() -> scanea el contenido del dir 

    
    $directorio = scandir(getcwd());
    
    // var_dump($directorio);
    
    chdir("../");
    echo getcwd();
?>
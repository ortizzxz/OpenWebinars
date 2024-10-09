<?php
    // fwrite() 
    // fputs()
    
    $miArchivo = fopen("archivo2.txt", "a+");

    // fwrite($miArchivo, "Hola, estoy escribiendo dentro de mi archivo");
    // fflush($miArchivo);

    // stat()
    //filesize()
    $arrayInfo = stat("archivo2.txt");
    var_dump($arrayInfo['size']);
    // echo filesize("archivo2.txt");

    $directorio = scandir(getcwd());

    var_dump($directorio);
?>
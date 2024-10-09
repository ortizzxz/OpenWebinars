<?php
    // cookies: info de usuario almacenada en el explorador 
    // sesion: se almacena en el servidor

    //usos de las cookies:
        // recordar credenciales, configuraciones, etc

    // si no indico cuando expira nunca expira

    //definir cookies propias
    setcookie("noExpira", 1);
    setcookie("siExpira", 2, time() + 10); // expira a los 10 segundos

    // variable superglobal $_COOKIE

    var_dump($_COOKIE);
    echo('<br/>');

    setcookie("idioma", "esp");

    if(isset($_COOKIE['idioma']) && $_COOKIE['idioma'] == "esp"){
        echo "Se ha definido una cookie con el idioma en español";
    }

    
?>
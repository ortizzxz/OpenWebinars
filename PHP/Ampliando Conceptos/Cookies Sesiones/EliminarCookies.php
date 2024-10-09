<?php

    //para borrar las cookies de la mnera mas efectiva la "recreamos" con el tiempo de caducidad en negativo
    setcookie("idioma", "", time() - 1);
    var_dump($_COOKIE);
?>
<?php
    if(isset($_GET['aceptar'])){
        $caducidad = time () + (60 * 60 * 24 * 365);

        setcookie("miCookie", 1, $caducidad);
    }
?>


</html>
<head>
    <title>Cookies</title>
</head>
<body>
    
    <?php
        if (!isset($_GET['aceptar']) && !isset($_COOKIE['miCookie'])) : 
    ?>
    
    <div>
        <h2>Cookies</h2>
        <p>Debes aceptar las cookies para seguir navegando</p>
        <a href="?aceptar=1"> Aceptar </a>
    </div>
    
    <?php
        endif;
    ?>
</body>
<html>
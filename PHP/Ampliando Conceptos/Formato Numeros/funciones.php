<?php

    $edad = 22; 
    $nota = 7.44;

    // is int o is float
    if(is_int($edad)){
        echo "$edad es un entero";
    }

    echo '<br />';

    if(is_float($nota)){
        echo "$nota es un decimal";
    }else{
        echo "$nota no es un decimal";
    }

    // formateo de numeros 
    // number_format()
    echo '<br/>';
    echo number_format("1000000", 2);
    echo '<br/>';
    echo number_format("1000000", 2, ",", ".");

    // redondear numeros 
    // round() 
    // ceil() redondea hacia arriba
    // floor() redondea hacia abajo
    
    echo '<h4>Funciones Round</h4>';
    echo round(0.60);
    echo '<br/>';
    echo round(0.50);
    echo '<br/>';
    echo round(0.49);
    echo '<br/>';
    echo round(-4.40);
    echo '<br/>';
    echo round(-4.60);
    echo '<br/>';
    echo round(-4.1322134, 2);
    echo '<br/>';
    echo round(1.5, 0, PHP_ROUND_HALF_UP);
    echo '<br/>';
    echo round(1.5, 0, PHP_ROUND_HALF_DOWN);

?>
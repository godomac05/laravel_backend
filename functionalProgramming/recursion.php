<?php

//La Recursividad es la capacidad que tienen las funciones de llmarse a si mismas por su mismo nombre 

function show($n){

    if($n < 1) {
        return;
    }

    echo "Hola ".$n."<br>";

    show($n - 1);

}

show(10);



?>
<?php

//No hacer cambios a lso elementos de entrada

class Counter{
    public int $count = 0;
}

$counter = new Counter();

//Funcion no pura
function show(Counter $counter):  string{
    $counter->count++;
    return $counter->count."<br>";
}

echo show($counter);
echo show($counter);
echo show($counter);
echo show($counter);
echo show($counter);

echo $counter->count;

//Funcion Pura

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

function add(float $a, float $b): float{
    return $a + $b;
}

echo add(1, 3);
echo add(1, 3);
echo add(1, 3);
echo add(1, 3);
echo add(1, 3);



?>
<?php

$beer = new stdClass();

$beer->name = "Erdinger";
$beer->alcohol = 8.5;

$beer->name = "Erdinger Pikantus";
//echo $beer->name;

//Converitr en array
$arr = (array) $beer;

echo gettype($arr);

echo "<br>";
echo $arr['name'];
echo "<br>";
echo $arr['alcohol'];
echo "<br>";

//Convertir  Array a Objeto

$arrLocation =[
    "address" => "Calle del Mar 15",
    "country" => "México"
];

$objLocation = (object) $arrLocation;

echo $objLocation->address;
echo "<br>";
print_r($objLocation);



?>
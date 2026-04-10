<?php

$beer = new Beer("Delirium Red", "Delirium", 8.5, true);

//Convertir Objeto a JSON
$json = json_encode($beer);

echo $json;
echo "<br>";

//Convertir JSON  a Objeto
$jsonBeer = '{"name":"Delirium Red", "brand":"Delirium", "alcohol":8.5, "isStrong":true}';

$objBeer = json_decode($jsonBeer);

echo "<br>";
print_r($objBeer);
echo "<br>";
echo "<br>";

echo $objBeer->name;


//Convertir Array a JSON
$arr = [
    "name"=>"Hector",
    "country"=>"Mexico"
];

$newJson = json_encode($arr);

echo "<br>";
echo "<br>";
echo $newJson;


//Convertir JSON a Array

$newArr = json_decode($newJson, true);

echo "<br>";
echo "<br>";

echo $newArr["country"];


class Beer {
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong; 

    public function __construct($name, $brand, $alcohol, $isStrong){
        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }



}


?>
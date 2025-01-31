<?php

require_once "./class/Deporte.php";
require_once "./class/Futbol.php";
require_once "./class/Basket.php";
require_once "./class/Rugby.php";

function getRandomSport() {
    $sports = [
        new Futbol(11, 90, 2, 0),  
        new Basket(5, 40, 4, 0),
        new Rugby(15, 80, 2, 0)
    ];
    return $sports[array_rand($sports)];
}

$sportsArray = [];
for ($i = 0; $i < 5; $i++) {
    $sportsArray[] = getRandomSport();
}

foreach ($sportsArray as $sport) {
    echo $sport->getot() . "<br>";
}

?>

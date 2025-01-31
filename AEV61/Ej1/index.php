<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once("./class/Producto.php");
require_once("./class/Pfresco.php");
require_once("./class/Prefrigerado.php");
require_once("./class/Pcongelado.php");
require_once("./class/Caire.php");
require_once("./class/Cagua.php");
require_once("./class/Cnitrogeno.php");

$pescado = new Cnitrogeno("20-3-2024", "Afganistán", -5, "Por filtración", 20);
var_dump($pescado);

$hielo = new Caire("20-9-2024", "España", -3, 100);
var_dump($hielo);

$calipo = new Cagua("30-12-24", "Dinamarca", -3, 0);
var_dump($calipo);

$frankfur = new Prefrigerado("28-1-25", "Alemania", 5, 46200);
var_dump($frankfur);

$fuet = new Pfresco("22-2-2025", "España");
var_dump($fuet);



?>
</body>
</html>
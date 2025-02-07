<?php
require_once("class/controlador.php");

$manager = new Biblio;
$manager->insertLibro("Cazeria en NY", "Davidme", 2025, 567);
$manager->insertLibro("Micky Mouse", "Tito Walt", 2006, 29);

$manager->readLibro(1);
$manager->readLibro(0);

$manager->deleteLibro(1);
$manager->deleteLibro(0);

$manager->readLibro(1);



$manager->insertRevista("Salvame", "Chabelita", 2025, "Cotilleos");

$manager->readRevista(0);

$manager->deleteRevista(0);

$manager->readRevista(0);

?>
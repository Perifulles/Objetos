<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin: 2px;
        }
    </style>
</head>
<body>
<h2>Introduzca su libro</h2>
<form action="index.php" method="post">
    Titulo <input type="text" name="Title"></input><br>
    Autor <input type="text" name="Autor"></input><br>
    Año de pubicación <input type="number" name="Anio"></input><br>
    Numero de páginas <input type="number" name="Npags"></input><br>
    <input type="hidden" name="subs" value="libro"></input>
    <input type="submit" name="sublib"></input><br>
</form>
<br><br>
<h2>Introduzca su Revista</h2>
<form action="index.php" method="post">
    Titulo <input type="text" name="Title"></input><br>
    Autor <input type="text" name="Autor"></input><br>
    Año de pubicación <input type="number" name="Anio"></input><br>
    Temática <input type="text" name="section"></input><br>
    <input type="hidden" name="subs" value="revista"></input>
    <input type="submit" name="subrev"></input><br>
</form>
    
<br><br>
<h1>Lector de libros</h1>
<h2>Que libro/revista quieres visualizar ?</h2>
<form action="index.php" method="post">
    Numero articulo<input type="number" name="numlec" min=0></input><br>
    Libro<input type="radio" name="eleccion" value="libro"><br>
    Revista<input type="radio" name="eleccion" value="revista"><br>
    <input type="hidden" name="subs" value="leer"></input>
    <input type="submit" name="submit"></input><br>
</form>
</body>
</html>

<?php
#Creamos objetos para hacer las pruevas
require_once("class/Manager.php");
$Miguel = new Manager('./info.json', 'libro');
$Miguel->Create();


/*
$manager->insertLibro("Cazeria en NY", "Davidme", 2025, 567);
$manager->insertLibro("Micky Mouse", "Tito Walt", 2006, 29);


$manager->insertRevista("Salvame", "Chabelita", 2025, "Cotilleos");
$manager->insertRevista("miaw", "Antonio Banderas", 2001, "Gatos");

*/




/*
if ($envio == 'NO ENVIADO'){
}else{
switch ($envio){
    case "libro":
        $manager->insertLibro($_POST["Title"], $_POST["Autor"], $_POST["Anio"], $_POST["Npags"]);
        break;
        
    case "revista":
        $manager->insertRevista($_POST["Title"], $_POST["Autor"], $_POST["Anio"], $_POST["section"]);
        break;
        
    case "leer":

        if($eleccion == "libro"){
            $manager->readLibro($_POST["numlec"]);
        }elseif($eleccion == "revista"){
            $manager->readRevista($_POST["numlec"]);
        }
        
        break;
}
}
*/


?>
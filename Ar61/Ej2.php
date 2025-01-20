<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Fruta {
    protected $color;
    protected $forma;
    protected $sabor;


    public function __construct($color = "No color", $forma = "No shipe", $sabor = "No savour") {
        $this->color = $color;
        $this->forma = $forma;
        $this->sabor = $sabor;
    }

    
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getForma()
    {
        return $this->forma;
    }

    public function setForma($forma)
    {
        $this->forma = $forma;
    }
 
    public function getSabor()
    {
        return $this->sabor;
    }

    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
    }
}


//Creamos una Fruta
$Arandano = new Fruta("Blue", "Circle", "sweet");

var_dump($Arandano);
$Arandano->setColor("Morado");
var_dump($Arandano);

?>

</body>
</html>

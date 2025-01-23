<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class rectangulo {
    protected $largo;
    protected $ancho;


    public function __construct($largo = 0, $ancho = 0) {
        $this->largo = $largo;
        $this->ancho = $ancho;
    }


    /**
     * Get the value of largo
     */ 
    public function getLargo()
    {
        return $this->largo;
    }

    /**
     * Set the value of largo
     */ 
    public function setLargo($largo)
    {
        $this->largo = $largo;

        return $this;
    }

    /**
     * Get the value of ancho
     */ 
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set the value of ancho
     */ 
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    public function CalculoArea(){
        $area = $this->ancho * $this->largo;
        return($area);
    }
}


//Creamos una Fruta
$campofutbol = new rectangulo(120,90);
$areacampo = $campofutbol->CalculoArea();
$largo = $campofutbol->getLargo();
$ancho = $campofutbol->getAncho();
echo "Teniendo en cuenta que el cmapo de futbol tiene unas medidas de $largo x $ancho el area total sera de $areacampo metros.";
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

class instrumento{
    protected $musico;
    protected $numnotas;
    protected $nombre;

    public function __construct($musico = "Instrumento libre", $numnotas = "x",  $nombre = "No name" )
    {
        $this->musico = $musico;
        $this->numnotas = $numnotas;
        $this->nombre = $nombre;
    }

    public function tocarinstrumento(){
        $name = $this->nombre;
        echo "Estas tocando el/la $name y asi suena: ";
    }

    /**
     * Get the value of musico
     */ 
    public function getMusico()
    {
        return $this->musico;
    }

    /**
     * Set the value of musico
     *
     * @return  self
     */ 
    public function setMusico($musico)
    {
        $this->musico = $musico;

        return $this;
    }

    /**
     * Get the value of numnotas
     */ 
    public function getNumnotas()
    {
        return $this->numnotas;
    }

    /**
     * Set the value of numnotas
     *
     * @return  self
     */ 
    public function setNumnotas($numnotas)
    {
        $this->numnotas = $numnotas;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->nombre;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}

class cuerda extends instrumento {

    protected $materialcuerda;

    public function __construct($musico, $numnotas, $nombre, $materialcuerda = "No lleva cuerda")
    {
        parent::__construct($musico, $numnotas,  $nombre);
        $this->materialcuerda = $materialcuerda;
    }

    public function tocarinstrumento()
    {
        parent::tocarinstrumento();
        echo " trrrum trrrum";
    }

        /**
     * Get the value of materialcuerda
     */ 
    public function getMaterialcuerda()
    {
        return $this->materialcuerda;
    }

    /**
     * Set the value of materialcuerda
     *
     * @return  self
     */ 
    public function setMaterialcuerda($materialcuerda)
    {
        $this->materialcuerda = $materialcuerda;

        return $this;
    }
}

class viento extends instrumento {

    protected $numagujeros;

    public function __construct($musico, $numnotas, $nombre, $numagujeros = "No tiene gujeros",)
    {
        parent::__construct($musico, $numnotas, $nombre);
        $this->numagujeros = $numagujeros;
    }

    public function tocarinstrumento()
    {
        parent::tocarinstrumento();
        echo "Fiu Fiu";
    }

    /**
     * Get the value of numagujeros
     */ 
    public function getNumagujeros()
    {
        return $this->numagujeros;
    }

    /**
     * Set the value of numagujeros
     *
     * @return  self
     */ 
    public function setNumagujeros($numagujeros)
    {
        $this->numagujeros = $numagujeros;

        return $this;
    }
    
}

class percusion extends instrumento {
}

$flauta = new viento("Miguelon", 7, "flauta travesera", 8);
$flauta->tocarinstrumento();


?>
</body>
</html>
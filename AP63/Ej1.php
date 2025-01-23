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
    protected $tipo;

    public function __construct($musico = "Instrumento libre", $numnotas = "x",  $tipo = "Sin tipo" )
    {
        $this->musico = $musico;
        $this->numnotas = $numnotas;
        $this->tipo = $tipo;
    }

    public function tocarinstrumento(){
        
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
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}

class guitarra extends instrumento {

    protected $tipomadera;

    public function __construct($musico, $numnotas, $tipo, $tipomadera = "No es de madera",)
    {
        parent::__construct($musico, $numnotas, $tipo);
        $this->tipomadera = $tipomadera;
    }


    /**
     * Get the value of tipomadera
     */ 
    public function getTipomadera()
    {
        return $this->tipomadera;
    }

    /**
     * Set the value of tipomadera
     *
     */ 
    public function setTipomadera($tipomadera)
    {
        $this->tipomadera = $tipomadera;

        return $this;
    }

}

class silofono extends instrumento {

    protected $numagujeros;

    public function __construct($musico, $numnotas, $tipo, $numagujeros = "No tiene gujeros",)
    {
        parent::__construct($musico, $numnotas, $tipo);
        $this->numagujeros = $numagujeros;
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

class trompeta extends instrumento {

    
}

class tambor extends instrumento {

    
}

class saxofon extends instrumento {

    
}

class piano extends instrumento {
    

    
}





?>
</body>
</html>
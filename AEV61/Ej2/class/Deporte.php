<?php

class Deporte {
    protected $NumeroJugadores;
    protected $TiempoPartido;
    protected $PartesPartido;
    



public function __construct($NumeroJugadores, $TiempoPartido, $PartesPartido) {
    $this-> NumeroJugadores = $NumeroJugadores;
    $this-> TiempoPartido = $TiempoPartido;
    $this-> PartesPartido = $PartesPartido;
}

   

    /**
     * Get the value of NumeroJugadores
     */ 
    public function getNumeroJugadores()
    {
        return $this->NumeroJugadores;
    }

    /**
     * Set the value of NumeroJugadores
     *
     * @return  self
     */ 
    public function setNumeroJugadores($NumeroJugadores)
    {
        $this->NumeroJugadores = $NumeroJugadores;

        return $this;
    }

    /**
     * Get the value of TiempoPartido
     */ 
    public function getTiempoPartido()
    {
        return $this->TiempoPartido;
    }

    /**
     * Set the value of TiempoPartido
     *
     * @return  self
     */ 
    public function setTiempoPartido($TiempoPartido)
    {
        $this->TiempoPartido = $TiempoPartido;

        return $this;
    }

    /**
     * Get the value of PartesPartido
     */ 
    public function getPartesPartido()
    {
        return $this->PartesPartido;
    }

    /**
     * Set the value of PartesPartido
     *
     * @return  self
     */ 
    public function setPartesPartido($PartesPartido)
    {
        $this->PartesPartido = $PartesPartido;

        return $this;
    }
}

?>






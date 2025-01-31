<?php

require_once("Deporte.php");

class Basket extends Deporte {
    protected $Canastas;

    public function __construct($NumeroJugadores, $TiempoPartido, $PartesPartido, $Canastas) {
        parent::__construct($NumeroJugadores, $TiempoPartido, $PartesPartido, $Canastas);
        $this->Canastas = $Canastas;
    }



    public function getot() {
        return "Baloncesto: {$this->NumeroJugadores} jugadores, {$this->TiempoPartido} minutos, {$this->PartesPartido} partes, {$this->Canastas} Canastas.";
    }

    /**
     * Get the value of Canastas
     */ 
    public function getCanastas()
    {
        return $this->Canastas;
    }

    /**
     * Set the value of Canastas
     *
     * @return  self
     */ 
    public function setCanastas($Canastas)
    {
        $this->Canastas = $Canastas;

        return $this;
    }
}
?>
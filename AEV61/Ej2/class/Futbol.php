<?php

require_once("Deporte.php");

class Futbol extends Deporte {
    protected $Goles;

    public function __construct($NumeroJugadores, $TiempoPartido, $PartesPartido, $Goles) {
        parent::__construct($NumeroJugadores, $TiempoPartido, $PartesPartido);
        $this->Goles = $Goles;
    }


    public function getot() {
        return "Fútbol: {$this->NumeroJugadores} jugadores, {$this->TiempoPartido} minutos, {$this->PartesPartido} partes, {$this->Goles} goles.";
    }

    /**
     * Get the value of Goles
     */ 
    public function getGoles()
    {
        return $this->Goles;
    }

    /**
     * Set the value of Goles
     *
     * @return  self
     */ 
    public function setGoles($Goles)
    {
        $this->Goles = $Goles;

        return $this;
    }
}
?>
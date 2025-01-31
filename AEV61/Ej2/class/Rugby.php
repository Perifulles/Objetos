<?php

require_once("Deporte.php");

class Rugby extends Deporte {
    protected $Placas;

    public function __construct($NumeroJugadores, $TiempoPartido, $PartesPartido, $Placas) {
        parent::__construct($NumeroJugadores, $TiempoPartido, $PartesPartido, $Placas);
        $this->Placas = $Placas;
    }



    public function getPlacas()
    {
        return $this->Placas;
    }

   
    public function setPlacas ($Placas): self
    {
        $this->Placas = $Placas;

        return $this;
    }

    public function getot() {
        return "Rugby: {$this->NumeroJugadores} jugadores, {$this->TiempoPartido} minutos, {$this->PartesPartido} partes, {$this->Placas} Placas.";
    }
}
?>
<?php

require_once("Pcongelado.php");

class Cnitrogeno extends Pcongelado{
    protected $mcongelacion;
    protected $segsexpo;

    public function __construct($fembasado, $porigen, $trecomendada, $mcongelacion = "por contacto", $segsexpo = 5)
    {
        parent::__construct($fembasado, $porigen, $trecomendada);
        $this->mcongelacion = $mcongelacion;
        $this->segsexpo = $segsexpo;
    }
    
}

    ?>
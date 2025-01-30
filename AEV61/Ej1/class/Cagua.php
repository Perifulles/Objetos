<?php

require_once("Pcongelado.php");

class Cagua extends Pcongelado{
    protected $salinidad;

    public function __construct($fembasado, $porigen, $trecomendada, $salinidad = 0)
    {
        parent::__construct($fembasado, $porigen, $trecomendada);
        $this->salinidad = $salinidad;
    }

}

    ?>
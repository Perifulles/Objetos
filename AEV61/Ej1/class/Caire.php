
<?php

require_once("Pcongelado.php");

class Caire extends Pcongelado{
    protected $porcaire;

    public function __construct($fembasado, $porigen, $trecomendada, $porcaire = 0)
    {
        parent::__construct($fembasado, $porigen, $trecomendada);
        $this->porcaire = $porcaire;
    }



    /**
     * Get the value of porcaire
     */ 
    public function getPorcaire()
    {
        return $this->porcaire;
    }

    /**
     * Set the value of porcaire
     *
     * @return  self
     */ 
    public function setPorcaire($porcaire)
    {
        $this->porcaire = $porcaire;

        return $this;
    }
}
?>
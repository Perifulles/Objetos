
<?php

require_once("Producto.php");

class Prefrigerado extends Producto{
    protected $codorganismo;

    public function __construct($fembasado, $porigen, $trecomendada, $codorganismo = 0)
    {
        parent::__construct($fembasado, $porigen, $trecomendada);
        $this->codorganismo = $codorganismo;
    }


    /**
     * Get the value of codorganismo
     */ 
    public function getCodorganismo()
    {
        return $this->codorganismo;
    }

    /**
     * Set the value of codorganismo
     *
     * @return  self
     */ 
    public function setCodorganismo($codorganismo)
    {
        $this->codorganismo = $codorganismo;

        return $this;
    }
}
?>
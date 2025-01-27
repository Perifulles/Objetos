
<?php

class Producto{
    protected $fembasado;
    protected $porigen;
    protected $trecomendada;

    public function __construct($fembasado = "No date registed", $porigen = "Spain", $trecomendada = 5)
    {
        $this->fembasado = $fembasado;
        $this->porigen = $porigen;
        $this->trecomendada = $trecomendada;
    }


    /**
     * Get the value of fembasado
     */ 
    public function getFembasado()
    {
        return $this->fembasado;
    }

    /**
     * Set the value of fembasado
     *
     * @return  self
     */ 
    public function setFembasado($fembasado)
    {
        $this->fembasado = $fembasado;

        return $this;
    }

    /**
     * Get the value of porigen
     */ 
    public function getPorigen()
    {
        return $this->porigen;
    }

    /**
     * Set the value of porigen
     *
     * @return  self
     */ 
    public function setPorigen($porigen)
    {
        $this->porigen = $porigen;

        return $this;
    }

    /**
     * Get the value of trecomendada
     */ 
    public function getTrecomendada()
    {
        return $this->trecomendada;
    }

    /**
     * Set the value of trecomendada
     *
     * @return  self
     */ 
    public function setTrecomendada($trecomendada)
    {
        $this->trecomendada = $trecomendada;

        return $this;
    }
}
?>
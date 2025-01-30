
<?php

require_once("Producto.php");

class Pcongelado extends Producto{
    
    public function __construct($fembasado, $porigen, $trecomendada)
    {
        parent::__construct($fembasado, $porigen, $trecomendada);
    }

}
?>
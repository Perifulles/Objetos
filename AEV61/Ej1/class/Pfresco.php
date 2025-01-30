
<?php

require_once("Producto.php");

class Pfresco extends Producto{

    public function __construct($fembasado, $porigen){
        parent::__construct($fembasado, $porigen);
    }

    public function fresko(){
        echo "Este producto esta freskisimo manin.";
    }
}
?>
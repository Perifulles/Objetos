<?php

require_once("Publicaciones.php");

class libro extends publicaciones{

    protected $numpag;

    public function __construct($titulo = "No Title", $autor = "No Author", $ano = "No Year", $numpag = "No num")
    {
        parent::__construct($titulo, $autor, $ano);
        $this->numpag = $numpag;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . '<br> <b>Numero de paginas:</b> ' . $this->numpag . '<br>
        <b>Tipo: </b> <span style="background-color:rgb(243, 247, 21); color: black;">Libro</span>';
    }

    
}


?>
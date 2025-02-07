<?php
require_once ("libro.php");
require_once ("revista.php");

class Biblio{
    private $libros = [];
    private $revista = [];


    public function insertLibro($titulo, $autor, $ano, $numpag){
        $this->libros[] = new libro($titulo, $autor, $ano, $numpag);

    }

    public function insertRevista($titulo, $autor, $ano, $tematica){
        $this->revista[] = new revista($titulo, $autor, $ano, $tematica);
    }

    public function readLibro($num){
        $libros = $this->libros;
        if(isset($libros[$num])){
            echo "<br><br>" . $libros[$num]->mostrarInfo(); 
        } else {echo "<br><br>Error al leer el Objeto indicado no existe";}
    }

    public function readRevista($num){
        $revista = $this->revista;
        if(isset($revista[$num])){
            echo "<br><br>" . $revista[$num]->mostrarInfo(); 
        } else {echo "<br><br>Error al leer el Objeto indicado no existe";}
    }

    public function deleteLibro($num){
        if(isset($this->libros[$num])){
            unset($this->libros[$num]);
        } else {echo "No se puede borrar el objeto, por que no existe";}
    }

    public function deleteRevista($num){
        if(isset($this->revista[$num])){
            unset($this->revista[$num]);
        } else {echo "No se puede borrar el objeto, por que no existe";}
    }

    

}

?>
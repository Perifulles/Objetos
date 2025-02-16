<?php
require_once ("libro.php");
require_once ("revista.php");

class Manager{
    private $rutaJson;
    private $tipoObjeto;

    public function __construct($ruta = "Sin ruta", $tipo = "Sin tipo")
        {
            $this->rutaJson = $ruta;
            $this->tipoObjeto = $tipo;
    }
    
    /**Getters y setters*/ 
        public function getRutaJson()
        {
            return $this->rutaJson;
        }

        /**
         * Set the value of rutaJson
         *
         * @return  self
         */ 
        public function setRutaJson($rutaJson)
        {
            $this->rutaJson = $rutaJson;

            return $this;
        }

        /**
         * Get the value of tipoObjeto
         */ 
        public function getTipoObjeto()
        {
            return $this->tipoObjeto;
        }

        /**
         * Set the value of tipoObjeto
         *
         * @return  self
         */ 
        public function setTipoObjeto($tipoObjeto)
        {
            $this->tipoObjeto = $tipoObjeto;

            return $this;
        }
    //Fin de getters y setters//
    
    public function insertar($arrayObjetos){
        $jsonBiblio = [];

        foreach ($arrayObjetos as $objetos){
            $jsonBiblio[] = $objetos->toarray();
        }

        $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);

        file_put_contents($this->rutaJson, $jsonBiblio);
    }

    
    public function extraer(){
        $biblioteca = [];
        $JsonBiblio = file_get_contents($this->rutaJson);
 
        $DatainArray = json_decode($JsonBiblio, true);

        if ($DatainArray == null){return $biblioteca;}else{
        foreach ($DatainArray as $arrays){
            $biblioteca[] = $this->tipoObjeto::fromArray($arrays);
        }

        return $biblioteca;}
    }

    //CRUD
    public function Create(){

        $paqarr = $this->extraer();


        $envio = isset($_POST['subs']) ? $_POST['subs'] : "NO ENVIADO";

        if ($envio == 'NO ENVIADO'){}
            elseif($this->tipoObjeto == 'libro' && $_POST['subs'] == "libro"){
                $paqarr[] = new libro ($_POST["Title"], $_POST["Autor"], $_POST["Anio"], $_POST["Npags"]);
                $this->insertar($paqarr);
            }elseif ($this->tipoObjeto == 'revista' && $_POST['subs'] == "revista") {
                $paqarr[] = new revista ($_POST["Title"], $_POST["Autor"], $_POST["Anio"], $_POST["section"]);
                $this->insertar($paqarr); 
        }
    }

    public function Read(){

        $eleccion = isset($_POST['eleccion'])? $_POST['eleccion']  : "No info";

        if ($eleccion == "libro"){
            $lector = new Manager('./libros.json', 'libro');
        }elseif ($eleccion == "revista") {
            $lector = new Manager('./revistas.json', 'revista');
        }elseif ($eleccion == "No info"){ return;}

        $paqarr = $lector->extraer();
        $count = 0;

        foreach($paqarr as $objeto){
            echo "<br>";
            echo $objeto->mostrarInfo();
            echo '<form action="index.php" method="post">
                    <input type="hidden" name="tipoborrar" value="' . $eleccion . '"></input>
                    <input type="hidden" name="borrar" value="' . $count . '"></input>
                    <input type="submit" name="submit" value="Borrar"></input><br>
                    </form>';
                $count ++;
            echo "<br>";
        }

    }

    public function Update(){
        $paqarr = [];

    }

    public function Delete(){

        $tipo = isset($_POST["tipoborrar"])? $_POST["tipoborrar"]  : "No info";

        if ($tipo == "libro"){
            $lector = new Manager('./libros.json', 'libro');
        }elseif ($tipo == "revista") {
            $lector = new Manager('./revistas.json', 'revista');
        }elseif ($tipo == "No info"){ return;}


        $nobjeto = isset($_POST["borrar"]) ? $_POST["borrar"] : "No delete";

        if ($nobjeto == "No delete"){return;}
        else{ $paqarr = $lector->extraer();
            unset($paqarr[$nobjeto]);
            $paqarr = array_values($paqarr);
        }
        $lector->insertar($paqarr);
        $_POST['eleccion'] = $_POST['tipoborrar'];
        $this->read();


    }
}

?>
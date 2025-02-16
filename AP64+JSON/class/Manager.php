<?php
require_once ("libro.php");
require_once ("revista.php");

class Manager{
    private $rutaJson;
    private $tipoObjeto;

    public function __construct($ruta, $tipo)
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








    public function insert($arrayObjetos){
        $jsonBiblio = [];

        foreach ($arrayObjetos as $objetos){
            $jsonBiblio = $objetos->toarray();
        }

        $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);

        file_put_contents($this->rutaJson, $jsonBiblio);
    }

    public function extract(){
        $biblioteca = [];
        $JsonBiblio = file_get_contents($this->rutaJson);

        $DatainArray = json_decode($JsonBiblio);

        foreach ($DatainArray as $arrays){
            $biblioteca[] = $this->tipoObjeto::fromArray($arrays);
        }

        return $biblioteca;
    }

    //CRUD
    public function Create(){
        $envio = isset($_POST['subs']) ? $_POST['subs'] : "NO ENVIADO";
        $eleccion = isset($_POST['eleccion']) ? $_POST['eleccion'] : "NO ENVIADO";

        if ($envio == 'NO ENVIADO'){}
        else{
        $paqarr = [new libro ($_POST["Title"], $_POST["Autor"], $_POST["Anio"], $_POST["Npags"])];
        $this->insert($paqarr);
        }
    }

    public function Read(){
        $paqarr = [];

    }

    public function Update(){
        $paqarr = [];

    }

    public function Delete(){
        $paqarr = [];

    }
}

?>
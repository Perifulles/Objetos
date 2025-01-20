<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Animal {
    protected $nombre;
    protected $edad;
    protected $vacunado;


    public function __construct($nombre = "No name", $edad = "No age", $vacunado = "Not vacuned") {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->vacunado = $vacunado;
    }


    // Manifestar
    public function Manifestar() {
    }

    // Desplazar
    public function Desplazar() {
    }

    // Vacunar
    public function Vacunar() {
        $this->vacunado = "Vacuned";
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     *
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;


    }

        /**
         * Get the value of edad
         */ 
        public function getEdad()
        {
                return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * 
         */ 
        public function setEdad($edad)
        {
                $this->edad = $edad;


        }

    /**
     * Get the value of vacunado
     */ 
    public function getVacunado()
    {
        return $this->vacunado;
    }

    /**
     * Set the value of vacunado
     *
     * 
     */ 
    public function setVacunado($vacunado)
    {
        $this->vacunado = $vacunado;

    }
}

class Perro extends Animal{
    protected $raza;

    public function __construct($nombre, $edad, $vacunado, $raza = "Común" ) {
        parent::__construct($nombre, $edad, $vacunado);
        $this->raza = $raza;}

    // Manifestar
    public function Manifestar() {
        echo "El perro se manifiesta.";
    }

    // Desplazar
    public function Desplazar() {
        echo "El perro se desplaza."; 
    }

        /**
     * Get the value of raza
     */ 
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set the value of raza
     *
     * 
     */ 
    public function setRaza($raza)
    {
        $this->raza = $raza;


    }
}

class Gaviota extends Animal{
    protected $plumaje;

    public function __construct($nombre, $edad, $vacunado, $plumaje = "Sin plumas" ) {
        parent::__construct($nombre, $edad, $vacunado);
        $this->plumaje = $plumaje;}

    // Manifestar
    public function Manifestar() {
        echo "La gaviota se manifiesta.";
    }

    // Desplazar
    public function Desplazar() {
        echo "La gaviota se desplaza."; 
    }

    /**
     * Get the value of plumaje
     */ 
    public function getPlumaje()
    {
        return $this->plumaje;
    }

    /**
     * Set the value of plumaje
     *
     * 
     */ 
    public function setPlumaje($plumaje)
    {
        $this->plumaje = $plumaje;

    }
}

//Perro 
$perro = new Perro("Thor",8,"Vacunado","Pastor Alemán");
$perro->Manifestar();
$perro->Desplazar();
$perro->Vacunar();
$vacunado = $perro->getVacunado();
echo "El perro esta $vacunado";
echo "<br>";

//Gaviota 
$gaviota = new Gaviota("Pajaro",3,"Vacunado","Plumitas de colores");
$gaviota->Manifestar();
$gaviota->Desplazar();

?>

</body>
</html>


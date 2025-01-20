<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Tarea {
    protected $titulo;
    protected $descripcion;
    protected $fecha;


    public function __construct($titulo = "No title", $descripcion = "No text", $fecha = "No date") {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
    }

    
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
 
    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
}


//Creamos una tarea
$tarea = new Tarea("BBDDEj3", "En esta entraga hareis 398389289892389233 ejercicios By Thomás", "20-1-25");

var_dump($tarea);
$tarea->setTitulo("BBDDInfierno");
var_dump($tarea);

?>

</body>
</html>

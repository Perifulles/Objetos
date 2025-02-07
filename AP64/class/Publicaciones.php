<?php

class Publicaciones {
    protected $titulo;
    protected $autor;
    protected $ano;

    // Constructor con valores por defecto
    public function __construct($titulo = "No Title", $autor = "No Author", $ano = "No Year") {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    // Getter para el título
    public function getTitulo() {
        return $this->titulo;
    }

    // Setter para el título
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    // Getter para el autor
    public function getAutor() {
        return $this->autor;
    }

    // Setter para el autor
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    // Getter para el año de publicación
    public function getAno() {
        return $this->ano;
    }

    // Setter para el año de publicación
    public function setAno($ano) {
        $this->ano = $ano;
    }

    // Método para mostrar información de la publicación
    public function mostrarInfo() {
        return "<U>DATOS DEL ARTICULO:</U> <br>
        <b>Titulo: </b> {$this->titulo}<br>
        <b>Autor: </b> {$this->autor}<br>
        <b>Año: </b>{$this->ano}";
    }
}

?>

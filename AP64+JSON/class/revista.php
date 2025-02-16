<?php

require_once("Publicaciones.php");

class revista extends publicaciones{

    protected $tematica;


    public function __construct($titulo = "No Title", $autor = "No Author", $ano = "No Year", $tematica = "Sin tematica")
    {
        parent::__construct($titulo, $autor, $ano);
        $this->tematica = $tematica;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . '<br> <b>Numero de paginas:</b> ' . $this->tematica . '<br>
        <b>Tipo: </b> <span style="background-color:rgb(243, 247, 21); color: black;">Revista</span>';
    }

    public function toArray(){
        return [
            'title' => $this->titulo,
            'author' => $this->autor,
            'year' => $this->ano,
            'team' => $this->tematica
        ];
    }

    public static function fromArray(array $data){
        return new revista($data['title'], $data['author'], $data['year'], $data['team']);
    }
}




?>
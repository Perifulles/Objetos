<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Triangle {
    private $lado1;
    private $lado2;
    private $lado3;

    // Constructor para inicializar los lados
    public function __construct($lado1, $lado2, $lado3) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    // sets y gets de las propiedades ya que las hemos hecho privadas.
    //Lado1
    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }
    public function getLado1() {
        return $this->lado1;
    }

    //Lado2
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }
    public function getLado2() {
       return $this->lado2;
    }

    //Lado3
    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }
    public function getLado3() {
        return $this->lado3;
    }

    // Método para calcular el perímetro
    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    // Método para calcular el área usando la fórmula de Herón
    public function calcularArea() {
        $perimetro = $this->calcularPerimetro();
        $semiPerimetro = $perimetro / 2;
        $area = sqrt(
            $semiPerimetro *
            ($semiPerimetro - $this->lado1) *
            ($semiPerimetro - $this->lado2) *
            ($semiPerimetro - $this->lado3)
        );
        return $area;
    }

    // Método para imprimir los resultados
    public function imprimirResultados() {
        echo "Lados del triángulo: $this->lado1, $this->lado2, $this->lado3<br>";
        echo "Perímetro: " . $this->calcularPerimetro() . "<br>";
        echo "Área: " . $this->calcularArea() . "<br>";
    }
}

// Crear un objeto de la clase Triangle
$triangulo = new Triangle(3, 4, 5);

// Imprimir resultados
$triangulo->imprimirResultados();

?>

</body>
</html>

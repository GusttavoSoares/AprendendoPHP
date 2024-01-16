<?php
 
  interface Forma  {
    public function calcularArea();
    public function calcularPerimetro();
  }

  class Retangulo implements Forma {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
      $this->base = $base;
      $this->altura = $altura;
    }

    public function calcularArea() {
      $area = $this->getAltura() * $this->getBase();
      return $area;
    }

    public function calcularPerimetro()     {
      $perimetro = (2 * $this->getAltura() ) + (2 * $this->getBase());
      return $perimetro;
    }

    public function getBase() {
      return $this->base;
    }

    public function getAltura() {
      return $this->altura;
    }

    public function setBase($base) {
      $this->base = $base;
    }

    public function setAltura($altura) {
      $this->base = $altura;
    }
  }

  class Circulo implements Forma {
    private $raio;

    public function getRaio() {
      return $this->raio;
    }

      public function setRaio($raio) {
      $this->raio = $raio;
    }

      public function  calcularArea() {
      $area = pi() * pow($this->getRaio(), 2);
      return $area;
    }

      public function calcularPerimetro()     {
      $perimetro = 2 * pi() * $this->getRaio();
      return $perimetro;
    }

    public function __construct($raio) {
      $this->raio = $raio;
    }
  }

  $retangulo1 = new Retangulo(5,2);
  echo "Área retângulo " . $retangulo1->calcularArea() . "</br>";
  echo "Perímetro retângulo " . $retangulo1->calcularPerimetro() . "</br>";

  $circulo1 = new Circulo(3);
  echo "Área círculo " . $circulo1->calcularArea() . "</br>";
  echo "Perímetro círculo " . $circulo1->calcularPerimetro() . "</br>";
?>
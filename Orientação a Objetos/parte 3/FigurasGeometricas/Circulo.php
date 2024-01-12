<?php
  namespace Circulo;

  class Circulo {
    private $raio;

    public function __construct($raio) {
      $this->raio = $raio;
    }

    public function getRaio() {
      return $this->raio;
    }

      public function setRaio($raio) {
      $this->raio = $raio;
    }

    public function calcularArea() {
      $area = pi() * pow($this->getRaio(), 2);
      return $area;
    }

      public function calcularCircunferencia()     {
      $perimetro = 2 * pi() * $this->getRaio();
      return $perimetro;
    }
    
  }
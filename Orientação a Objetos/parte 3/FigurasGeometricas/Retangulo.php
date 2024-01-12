<?php
  namespace Retangulo;

  class Retangulo {
    private $base;
    private $altura;

    public function __construct($base, $altura ) {
      $this->base = $base;
      $this->altura = $altura;
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

    public function calcularArea() {
      $area = $this->getAltura() * $this->getBase();
      return $area;
    }

      public function calcularPerimetro()     {
      $perimetro = (2 * $this->getAltura() ) + (2 * $this->getBase());
      return $perimetro;
    }
    
    
  }
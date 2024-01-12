<?php
  namespace Triangulo;

  class Triangulo {
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
      $area = ($this->getAltura()*$this->getBase())/2;
      return $area;
    }

      public function calcularPerimetro() {
      $hipotenusa = pow($this->getBase(), 2) + pow($this->getAltura(), 2);
      $hipotenusa = sqrt($hipotenusa);

      $perimetro = $this->getBase() + $this->getAltura() + $hipotenusa;
      return $perimetro;
    }
    
    
  }
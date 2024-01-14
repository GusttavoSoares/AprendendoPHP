<?php
  namespace Circulo;

  class Circulo {
    private $raio;
    public static $pi1 = 3.14;
    public static $pi2 = 3.14159;
    public static $pi3 = 3.1415926535;
    

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
      //$area = pi() * pow($this->getRaio(), 2);
      $area1 = self::$pi1 * pow($this->getRaio(), 2);
      $area2 = self::$pi2 * pow($this->getRaio(), 2);
      $area3 = self::$pi3 * pow($this->getRaio(), 2);
      
      echo "Para Pi " . self::$pi1 . " a área do círculo de raio " . $this->raio . " é " . $area1 . "<br/> " . 
           "Para Pi " . self::$pi2 . " a área do círculo de raio " . $this->raio . " é " . $area2 . "<br/> " .
           "Para Pi " . self::$pi3 . " a área do círculo de raio " . $this->raio . " é " . $area3 . "<br/> <br/> ";
    }

      public function calcularCircunferencia()     {
      $perimetro1 = 2 * self::$pi1 * $this->getRaio();
      $perimetro2 = 2 * self::$pi2 * $this->getRaio();
      $perimetro3 = 2 * self::$pi3 * $this->getRaio();
      echo "Para Pi " . self::$pi1 . " a circunferência do círculo de raio " . $this->raio . " é " . $perimetro1 . "<br/> " . 
           "Para Pi " . self::$pi2 . " a circunferênci do círculo de raio " . $this->raio . " é " . $perimetro2 . "<br/> " .
           "Para Pi " . self::$pi3 . " a circunferêncido círculo de raio " . $this->raio . " é " . $perimetro3 . "<br/>  ";
    }
    
  }
<?php

  if($_SERVER["REQUEST_METHOD"] == "POST") {
  $raio = $_POST["raio"];
  $error = 0;
  $raio_err = "";

  if(empty($raio) or strstr($raio," ")){
       $raio_err = "*Campo Raio vazio! <br/><br/>";
       $error++;
       echo $raio_err;
  } elseif (!is_numeric($raio)) {
    $raio_err = "*Campo raio não é um número! <br/><br/>";
    $error = 1;
    echo $raio_err;
  }

  if($error == 0) {
  include "FigurasGeometricas/Circulo.php";
    $circulo = new Circulo\Circulo(3);
    $circulo->calcularArea();
    $circulo->calcularCircunferencia();
    
  }

}

?>
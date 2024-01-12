<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    include "FigurasGeometricas/Circulo.php";
    include "FigurasGeometricas/Retangulo.php";
    include "FigurasGeometricas/Triangulo.php";

    $circulo = new Circulo\Circulo(3);
    echo "Área do círculo: " . $circulo->calcularArea() . "</br>";
    echo "Circunferência do círculo: " . $circulo->calcularCircunferencia() . "</br>";

    $retangulo = new Retangulo\Retangulo(2, 4);
    echo "Área do Retângulo: " . $retangulo->calcularArea() . "</br>";
    echo "Perímetro do Retângulo: " . $retangulo->calcularPerimetro() . "</br>";

    $triangulo = new Triangulo\Triangulo(3, 4);
    echo "Área do Triângulo: " . $triangulo->calcularArea() . "</br>";
    echo "Perímetro do Triângulo: " . $triangulo->calcularPerimetro() . "</br>";

  ?> 

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>
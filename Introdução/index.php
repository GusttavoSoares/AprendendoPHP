<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $valor1 = 2.5;
      $valor2 = 2.5;
      $valor3 = 1.0;
      $valor4 = 1;

      $media = ($valor1+$valor2+$valor3)/3;
      
      echo $media . "<br/>";

      if ($valor1 == $valor2) {
           echo "true" . "<br/>";
      } else {
           echo "false" . "<br/>";
      }

      if ($valor3 === $valor4) {
           echo "true" . "<br/>";
      } else {
           echo "false" . "<br/>";
      }

      echo var_dump($valor1) . "<br/>";
      echo var_dump($valor2) . "<br/>";
      echo var_dump($valor3) . "<br/>";
      echo var_dump($valor4) . "<br/>";
    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
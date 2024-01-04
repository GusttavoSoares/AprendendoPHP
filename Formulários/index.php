  <?php

  $valorM = $valorN = "";
  $valorM_error = $valorN_error = "";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorM = $_POST["valorM"];
    $valorN = $_POST["valorN"];

  if(empty($valorM) or strstr($valorM, " ")) {
    $valorM = "*valor 1 vazio! <br/><br/>";
  } elseif (!is_numeric($valorM)) {
    $valorM_error = "* campo 1 não é um número! <br/><br/>";
  }

  if(empty($valorN) or strstr($valorN, " ")) {
    $valorN = "*valor 2 vazio! <br/><br/>";
  } elseif (!is_numeric($valorN)) {
    $valorN_error = "* campo 2 não é um número! <br/><br/>";
  }
  }
?>

<html>
  <head>
    <title>Formulario</title>
  </head>

  <body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Primeiro valor: <input type="number" name="valorM">
    <br/><span class="error"><?php echo $valorM_error;?></span>
  Segundo valor: <input type="number" name="valorN">
    <br/><span class="error"><?php echo $valorN_error;?></span>
    <input type="submit">
  </form>

      <?php
        $vetor = array($valorM);
         for ($x = 0; $x < $valorM; $x++) {
           $vetor[$x] = rand(0, 100);
         }

        echo "PRIMOS: <br/>";
         $z = 0;
              
         foreach ($vetor as $valor) {
          
          if ($z >= $valorN) {
            break;
          }
           
         $contador = 0;
          for ($y = 1; $y <= $valor; $y++) {
           if ($valor % $y == 0) {
           $contador++;
           } 
         }
            if ($contador == 2) {
            $z++;
             echo "$valor <br/>"; 
            }
         }
?>

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
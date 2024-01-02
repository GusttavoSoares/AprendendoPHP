<html>
   <head>
      <title>PHP Test</title>
   </head>
   <body>
      <?php 
         $vetor = array(100);
         for ($x = 0; $x < 100; $x++) {
           $vetor[$x] = rand(0, 100);
         }
         
         echo "VALORES <br/>";
         foreach($vetor as $valor) {
          echo "$valor <br/>"; 
         }
         
         echo "PRIMOS <br/>";
         $x = 0;
              
         foreach ($vetor as $valor) {
         $contador = 0;
          for ($y = 1; $y <= $valor; $y++) {
           if ($valor % $y == 0) {
           $contador++;
           } 
         }
            if ($contador == 2) {
             echo "$valor <br/>"; 
            }
         }
        
         ?>
      <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
   </body>
</html>
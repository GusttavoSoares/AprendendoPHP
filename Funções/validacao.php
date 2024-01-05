<?php 
  $peso = $_POST["peso"];
  $altura = $_POST["altura"];
 
    validacaoDeDados($peso, $altura);

    function validacaoDeDados($peso, $altura) {
    $erro = 0;
    $peso_erro = $altura_erro = "";
      
      if(empty($peso)) {
        $peso_erro = "Campo Peso vazio! <br/><br/>";
        $erro = 1;
        echo $peso_erro;
      }
      
      if(!is_numeric($peso)) {
        $peso_erro = "Campo Peso não numérico! <br/><br/>";
        $erro = 1;
        echo $peso_erro;
      }

      if(empty($altura)) {
        $altura_erro = "Campo Altura vazio! <br/><br/>";
        $erro = 1;
        echo $altura_erro;
      }
      
      if(!is_numeric($altura)) {
        $altura_erro = "Campo Altura não numérico! <br/><br/>";
        $erro = 1;
        echo $altura_erro;
      }

      if ($erro == 0) {
       echo calcularImc($peso, $altura);
    }
  }

    function calcularImc($peso, $altura): string {
      $imc = round($peso / ($altura * $altura), 1);

        if ($imc < 18.5) {
        return "Seu IMC é {$imc}. Você está abaixo do peso";
        } else if ($imc >= 18.5 and $imc <= 24.9 ) {
        return "Seu IMC é {$imc}. Você está no peso normal";
        } else if ($imc >= 25 and $imc <= 29.9){
        return "Seu IMC é {$imc}. Você está acima do peso desejado";
        } else {
        return "Seu IMC é {$imc}. Seu estado é de obesidade";
        }
    }

    ?> 

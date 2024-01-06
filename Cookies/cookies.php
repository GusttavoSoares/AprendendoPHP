<?php
  $permitir = $_POST["permitir"];
  $nomeUsuario = $_POST["nomeUsuario"];
  $estado = $_POST["estado"];
  $error = 0;
  $number = 0;

 $nomeUsuario_err = $estado_err = "";

if($permitir == "yes") {

 if(empty($nomeUsuario) or strstr($nomeUsuario," ")){
    if($nomeUsuario < 3){
       $nomeUsuario_err = "Campo Nome de Usuário vazio! <br/><br/>";
       $error++;
       echo $nomeUsuario_err;
    }
  }

  if(empty($estado) or strstr($estado," ")){
    if($estado < 3){
       $estado_err = "Campo Estado vazio! <br/><br/>";
       $error++;
       echo $estado_err;
    }
  }

    if($error == 0) {
      $cookieName = "cookie{$number}";
      
      if(!isset($_COOKIE[$cookieName])) {
        $valor = "Nome do cookie: {$cookieName}, seu nome é {$nomeUsuario} e seu estado é {$estado}";
        setcookie($cookieName, $valor, time() + 60, "/");
        echo "Cookie '" . $cookieName . "' estabelecido! <br/>";
      } else {
        $number++;
        $cookieName = $cookieName . $number++;
        $valor = "Nome do cookie: {$cookieName}, seu nome é {$nomeUsuario} e seu estado é {$estado}";
        setcookie($cookieName, $valor, time() + 60, "/");
        echo "Cookie '" . $cookieName . "' estabelecido! <br/>";
      }
    }
    } else {
   echo "Não foi permitido criar um cookie";
}

print_r($_COOKIE);
?>
  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $primeiroNome = $_POST["primeiroNome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    
    $primeiroNome_error = $email_error = $idade_error = "";
    $error = 0;

  if(empty($primeiroNome) or strstr($primeiroNome, " ")) {
    $primeiroNome_error = "*Campo primeiro nome vazio! <br/><br/>";
    $error = 1;
    echo $primeiroNome_error;
  } 

  if(empty($email) or strstr($email, " ")) {
    $email_error = "*Campo E-mail vazio! <br/><br/>";
    $error = 1;
    echo $email_error;
  }

  if(empty($idade) or strstr($idade, " ")) {
    $idade_error = "*Campo idade vazio! <br/><br/>";
    $error = 1;
    echo $idade_error;
    
  } elseif (!is_numeric($idade)) {
    $idade_error = "*Campo idade não é um número! <br/><br/>";
    $error = 1;
    echo $idade_error;
    
  } elseif (strlen((string)$idade) > 3) {
   $idade_error = "*Campo idade deve ter menos de 3 dígitos" ;
   $error = 1;
   echo $idade_error;
  }

    if($error == 0) {
      class Usuario {
        private $primeiroNome;
        private $email;
        private $idade;

        public function setPrimeiroNome($primeiroNome){
          $this->primeiroNome = $primeiroNome;
        }

        public function getPrimeiroNome(){
          return $this->primeiroNome;
        }
        public function setEmail($email){
          $this->email = $email;
        }

        public function getEmail(){
          return $this->email;
        }
          public function setIdade($idade){
          $this->idade = $idade;
        }
         public function getIdade(){
          return $this->idade;
        }
      }

      $usuario = new Usuario();
      $usuario->setPrimeiroNome($primeiroNome);
      $usuario->setEmail($email);
      $usuario->setIdade($idade);

      echo "Primeiro nome: " . $usuario->getPrimeiroNome() . "</br>" ;
      echo "E-mail: " . $usuario->getEmail() . "</br>" ;
      echo "Idade: " . $usuario->getIdade() . "</br>" ;
    }
  }
?>
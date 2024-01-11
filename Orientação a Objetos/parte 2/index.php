<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
       class Departamento {
        private $nome;
        private $bloco;

        public function __construct($nome, $bloco) {
          $this->setNome($nome);
          $this->setBloco($bloco);
        }

        public function setNome($nome) {
          $this->nome = $nome;
        }

        public function getNome() {
          return $this-> nome;
        }

        public function setBloco($bloco) {
          $this->bloco = $bloco;
        }

        public function getBloco() {
          return $this-> bloco;
        }

        public function imprimirDepto() {
          echo "Nome do departamento: " . $departamento->getNome() . " Bloco do departamento: " . $departamento->getBloco();
        }
      }

       class InstitutoFederal {
        private $campus;
        private $endereco;
        private $departamentos;

        public function __construct($campus, $endereco) {

        $dep1 = new Departamento("DEL", "H");
        $dep2 = new Departamento("DIT", "C");
        $dep3 = new Departamento("DCC", "A");
          
        $this->departamentos = array($dep1, $dep2, $dep3);
        $this->setCampus($campus);
        $this->setEndereco($endereco);

        }
        
        public function adicionarMaisDepartamentos($nome, $bloco){  
          $dep1 = new Departamento($nome, $bloco);
          array_push($this->departamentos, $dep1);
        }

        public function setCampus($campus) {
          $this->campus = $campus; 
        }

        public function getCampus() {
          return $this-> campus; 
        }

        public function setEndereco($endereco) {
          $this->endereco = $endereco; 
        }

        public function getEndereco() {
          return $this-> endereco; 
        }

        public function imprimirIF() {
          echo "Campus: " . $this->getCampus() . " Endereço do campus: " . $this->getEndereco() . "</br>";
        }

         public function getDepartamentos() {
             echo "</br>";
           foreach ($this->departamentos as $departamento) {
             echo "Nome do departamento: " . $departamento->getNome() . " Bloco do departamento: " . $departamento->getBloco() . "</br>";
        }
      }
    }

    $instituto1 = new InstitutoFederal("São Paulo", "R. Pedro Vicente, 625 - Canindé, São Paulo - SP, 01109-010");
    
    echo $instituto1->imprimirIF();
    echo $instituto1->getDepartamentos();

    $instituto1->adicionarMaisDepartamentos("DAD", "A");
    echo $instituto1->getDepartamentos();      
    
?> 

  </body>
</html>
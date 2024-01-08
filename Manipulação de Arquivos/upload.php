<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $uploadOk = 1;
  $destino = "arquivos/" . basename($_FILES["arquivo"]["name"]);

  if (file_exists($destino)) {
    echo "O arquivo já existe. ";
    $uploadOk = 0;
  }

  if (strtolower(pathinfo($destino, PATHINFO_EXTENSION)) != "txt") {
    echo "O arquivo não é TXT. ";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "O arquivo não foi carregado.";
  } else {
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $destino)) {
      echo "O arquivo foi carregado com sucesso! </br></br>";
      $arquivo = fopen($destino, "a+") or die("Não foi possível abrir o arquivo.");
      echo " O conteudo do seu arquivo original é: </br></br>";

        while(!feof($arquivo)) {
        echo fgets($arquivo);
      }
        
      fclose($arquivo);
      editarArquivo($arquivo, $destino);

      $arquivo = fopen($destino, "a+") or die("Não foi possível abrir o arquivo.");
      echo "</br> A alteração foi feita com sucesso. O conteúdo do seu arquivo alterado é: </br></br>";
      echo fread($arquivo, filesize($destino));
      fclose($arquivo);
    } else {
      echo "Erro ao carregar o arquivo.";
    }
  }
} else {
  header("location:index.php");
  die();
}

function editarArquivo($arquivo, $destino) {
  $texto = " Ó mar salgado, quanto do teu sal
             São lágrimas de Portugal!
             Por te cruzarmos, quantas mães choraram,
             Quantos filhos em vão rezaram!
             Quantas noivas ficaram por casar
             Para que fosses nosso, ó mar!Valeu a pena? Tudo vale a pena\
             Se a alma não é pequena.
             Quem quer passar além do Bojador
             Tem que passar além da dor.
             Deus ao mar o perigo e o abismo deu,
             Mas nele é que espelhou o céu.";

  $arquivo = fopen($destino, "a+") or die("Não foi possível abrir o arquivo.");
  
  fwrite($arquivo, $texto);
  fclose($arquivo);
}
?>
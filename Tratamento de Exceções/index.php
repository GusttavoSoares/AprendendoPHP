<?php

function abrirArquivo($caminho) {
    try {
        if (!file_exists($caminho)) {
            throw new Exception("Arquivo não foi encontrado", 9876);
        } else {
            $arquivo = fopen($caminho, "r") or die("Não foi possível abrir o arquivo");
            fclose($arquivo);
        }
    } catch (Exception $ex) {
        echo "Mensagem da exceção " . $ex->getMessage() . "<br>";
        echo "Código " . $ex->getCode() . "<br>";
        echo "Caminho do Arquivo: " . $ex->getFile() . "<br>";
        echo "Linha: " . $ex->getLine() . "<br>";
    }
}

$caminho = "arquivos/arquivo.txt";
abrirArquivo($caminho);

?> 

<?php

spl_autoload_register(function (string $nomeCompletodaClasse) {
    //Alura\Banco\Model\Endereco
    $caminhoArquivo = str_replace("Alura\\Banco", "src", $nomeCompletodaClasse);
    $caminhoArquivo = str_replace("\\", DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= ".php";

    if (file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});
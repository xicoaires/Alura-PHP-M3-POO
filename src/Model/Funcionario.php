<?php

namespace Alura\Banco\Model;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setNome($nome) : void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }


}
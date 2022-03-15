<?php

namespace Alura\Banco\Model;

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }


}
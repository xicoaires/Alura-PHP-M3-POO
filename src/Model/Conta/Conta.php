<?php

namespace Alura\Banco\Model\Conta;

class Conta
{
    private $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    
    public function saca(float $valorASacar)
    {
        if ($this->saldo < $valorASacar){
            echo 'Valor indisponível';
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar)
    {
        if ($valorADepositar < 0){
            echo 'Valor de depósito inválido';
            return;
        }
            $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $conta)
    {
        if($valorATransferir > $this->saldo){
            echo 'Valor indisponível para transferencia';
            return;
        }

        $this->saca($valorATransferir);
        $conta->deposita($valorATransferir);

    }

    public function getSaldo() : float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

    public function getNomeTitular() : string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular() : string
    {
        return $this->titular->getCpf();
    }

}
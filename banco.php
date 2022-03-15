<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Conta\Conta;


$endereco = new Endereco('Recife', 'Santo Amaro', 'Rua Dois de Julho', '2501');
$primeiraConta = new Conta(new Titular(new Cpf('123.456.789.-09'), 'Vinicius', $endereco));

$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('123.122.111.-44'), 'Francisco', $endereco));
var_dump($segundaConta);
$outroEndereco =  new Endereco('Olinda', 'Ouro Preto', 'D2','8');
$outra = new Conta(new Titular(new Cpf('1234567890-09'), 'Fernando', $outroEndereco));
unset($outra);

echo Conta::getNumeroDeContas();
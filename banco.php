<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta= new Conta(new Titular(new Cpf('133.456.789-55'), 'Leticia Santos'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->getNomeTitular(). PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;
echo $primeiraConta->getCpf()  . PHP_EOL;

$segundaConta= new Conta (new Titular(new Cpf('256.984.654-48'), 'Patricia'));
echo Conta::getNumeroDeContas() . PHP_EOL;
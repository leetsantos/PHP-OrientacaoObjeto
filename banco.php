<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta= new Conta(new Titular(new Cpf('133.456.789-55'), 'Leticia Santos'));
$segundaConta= new Conta(new Titular(new Cpf('456.987.258-65'), 'Camila Borges'));
$terceiraConta= new Conta(new Titular(new Cpf('258.946.523-98'), 'Marilene Gonçalves'));

$primeiraConta->depositar(1000);
$segundaConta-> depositar(200);
$terceiraConta->depositar(800);

$terceiraConta->transferir(200,$primeiraConta);

$segundaConta->sacar(200);

$quartaConta= new Conta(new Titular(new Cpf('479.659.259-99'), 'Vanderleia Marta'));
$quintaConta= new Conta(new Titular(new Cpf('159.687.618-63'), 'Aila Loures'));

$quartaConta->depositar(500);
$quintaConta->depositar(500);

$quartaConta->transferir(100,$quintaConta);

$quintaConta->sacar (400);
echo $primeiraConta->getNomeTitular() . PHP_EOL . $primeiraConta->getSaldo() . PHP_EOL ;
echo $segundaConta->getNomeTitular() . PHP_EOL .$segundaConta->getSaldo() . PHP_EOL;
echo $terceiraConta->getNomeTitular() . PHP_EOL . $terceiraConta->getSaldo() .PHP_EOL;
echo $quartaConta->getNomeTitular() . PHP_EOL . $quartaConta->getSaldo() .PHP_EOL;
echo $quintaConta->getNomeTitular() . PHP_EOL . $quintaConta->getSaldo() . PHP_EOL;

echo "Total de contas:" .Conta::getNumeroDeContas() . PHP_EOL;
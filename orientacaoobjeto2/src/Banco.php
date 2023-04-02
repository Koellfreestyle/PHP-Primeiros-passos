<?php

require_once 'Conta.php';

$contaUm = new Conta();
$contaUm->deposita(500);
$contaUm->saca(200);
//var_dump($contaUm);
$contaUm->defineCpfTitular('123.456.789-10');
$contaUm->defineNomeTitular('Marco Aurelio Melo');
//$contaUm->saldo -= 300;
$contaDois = new Conta();
$contaDois->defineCpfTitular('234.567.890-10');
$contaDois->defineNomeTitular('Luana Paiva de Melo');
$contaDois->deposita(800);
$contaDois->transfere(250, $contaUm);
//$contaDois->transfere(500, $contaUm);
echo $contaUm->recuperaCpfTitular() . PHP_EOL;
echo $contaUm->recuperaNomeTitular() . PHP_EOL;
echo $contaUm->recuperaSaldo() . PHP_EOL;
echo $contaDois->recuperaCpfTitular() . PHP_EOL;
echo $contaDois->recuperaNomeTitular() . PHP_EOL;
echo $contaDois->recuperaSaldo() . PHP_EOL;

$contaTres = new Conta();
$contaTres->defineCpfTitular('Kiara Oliveira de Melo');
$contaTres->defineNomeTitular('345.678.901-10');
$contaTres->deposita(700) . PHP_EOL;
$contaTres->saca(300) . PHP_EOL;
echo $contaTres->recuperaCpfTitular() . PHP_EOL;
echo $contaTres->recuperaNomeTitular() . PHP_EOL;
echo $contaTres->recuperaSaldo() . PHP_EOL;




//var_dump($contaDois) . PHP_EOL;
//var_dump($contaUm) . PHP_EOL;
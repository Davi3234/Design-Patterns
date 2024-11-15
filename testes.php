<?php

use App\DesignPattern\CalculadoraDesconto;
use App\DesignPattern\CalculadoraImposto;
use App\DesignPattern\Impostos\Icms;
use App\DesignPattern\Impostos\Iss;
use App\DesignPattern\Orcamento;
require 'vendor/autoload.php';

// $calculadora = new CalculadoraImposto();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Iss());

$calculadora = new CalculadoraDesconto();

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 5;
$orcamento->valor = 600;

echo $calculadora->calculaDescontos($orcamento);
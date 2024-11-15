<?php

use App\DesignPattern\ChainResponsability\CalculadoraDesconto;
use App\DesignPattern\Orcamento;

$calculadora = new CalculadoraDesconto();

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 5;
$orcamento->valor = 600;

echo $calculadora->calculaDescontos($orcamento);
<?php

use App\DesignPattern\Orcamento;
use App\DesignPattern\Strategy\CalculadoraImposto;
use App\DesignPattern\Strategy\Impostos\Iss;

$calculadora = new CalculadoraImposto();

$orcamento = new Orcamento();

$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());

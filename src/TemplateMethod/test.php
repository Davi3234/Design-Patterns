<?php

use App\DesignPattern\Orcamento;
use App\DesignPattern\TemplateMethod\CalculadoraImposto;
use App\DesignPattern\TemplateMethod\Impostos\Icpp;

$calculadora = new CalculadoraImposto();

$orcamento = new Orcamento();

$orcamento->valor = 600;

echo $calculadora->calcula($orcamento, new Icpp());

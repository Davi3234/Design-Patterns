<?php

use App\DesignPattern\Orcamento;

$orcamento = new Orcamento();

$orcamento->valor = 500;

$orcamento->aplicaDescontoExtra();

echo $orcamento->valor;

$orcamento->aprova();


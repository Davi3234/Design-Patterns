<?php

use App\DesignPattern\Iterator\ListaOrcamento;
use App\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 2;
$orcamento1->valor = 500;
$orcamento1->aprova();

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 9;
$orcamento2->valor = 650;
$orcamento2->reprova();

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->valor = 320;
$orcamento3->aprova();

$listaOrcamento = new ListaOrcamento();
$listaOrcamento->addOrcamento($orcamento1);
$listaOrcamento->addOrcamento($orcamento2);
$listaOrcamento->addOrcamento($orcamento3);

foreach($listaOrcamento as $orcamento){
  var_dump($orcamento);
  echo PHP_EOL;
}
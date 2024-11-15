<?php
namespace App\DesignPattern\TemplateMethod\Impostos;

use App\DesignPattern\Orcamento;

interface Imposto{
  public function calculaImposto(Orcamento $orcamento): float;
}
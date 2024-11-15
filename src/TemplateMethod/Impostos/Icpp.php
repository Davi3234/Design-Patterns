<?php
namespace App\DesignPattern\TemplateMethod\Impostos;

use App\DesignPattern\Orcamento;

class Icpp extends ImpostoCom2Aliquotas{

  protected function deveAplicarTaxaMaxima(ORcamento $orcamento): bool{
    return $orcamento->valor > 500;
  }

  protected function calculaTaxaMaxima(Orcamento $orcamento): float{
    return $orcamento->valor * 0.03;
  }

  protected function calculaTaxaMinima(Orcamento $orcamento): float{
    return $orcamento->valor * 0.02;
  }

}
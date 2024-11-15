<?php
namespace App\DesignPattern\TemplateMethod\Impostos;

use App\DesignPattern\Orcamento;

class Ikcv extends ImpostoCom2Aliquotas{

  protected function deveAplicarTaxaMaxima(ORcamento $orcamento): bool{
    return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
  }

  protected function calculaTaxaMaxima(Orcamento $orcamento): float{
    return $orcamento->valor * 0.04;
  }

  protected function calculaTaxaMinima(Orcamento $orcamento): float{
    return $orcamento->valor * 0.025;
  }

}
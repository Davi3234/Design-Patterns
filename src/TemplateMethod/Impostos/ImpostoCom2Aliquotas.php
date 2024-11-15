<?php
namespace App\DesignPattern\TemplateMethod\Impostos;

use App\DesignPattern\Orcamento;
use App\DesignPattern\Strategy\Impostos\Imposto;

abstract class ImpostoCom2Aliquotas implements Imposto {
  public function calculaImposto(Orcamento $orcamento): float{
    if($this->deveAplicarTaxaMaxima($orcamento)){
      return $this->calculaTaxaMaxima($orcamento);
    }
    return $this->calculaTaxaMinima($orcamento);
  }

  abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
  abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;
  abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;
}
<?php
namespace App\DesignPattern\Strategy\Impostos;

use App\DesignPattern\Orcamento;

class Iss implements Imposto{
  public function calculaImposto(Orcamento $orcamento): float{
    return $orcamento->valor * 0.06;
  }
}
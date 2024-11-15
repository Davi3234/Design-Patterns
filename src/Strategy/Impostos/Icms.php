<?php
namespace App\DesignPattern\Strategy\Impostos;

use App\DesignPattern\Orcamento;
use App\DesignPattern\Strategy\Impostos\Imposto;

class Icms implements Imposto{
  public function calculaImposto(Orcamento $orcamento): float{
    return $orcamento->valor * 0.1;
  }
}

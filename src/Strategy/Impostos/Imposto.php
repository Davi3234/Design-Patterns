<?php
namespace App\DesignPattern\Strategy\Impostos;

use App\DesignPattern\Orcamento;

interface Imposto{
  public function calculaImposto(Orcamento $orcamento): float;
}
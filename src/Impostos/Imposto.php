<?php
namespace App\DesignPattern\Impostos;

use App\DesignPattern\Orcamento;

interface Imposto{
  public function calculaImposto(Orcamento $orcamento): float;
}
<?php
//Design Pattern Strategy
namespace App\DesignPattern\Strategy;

use App\DesignPattern\Orcamento;
use App\DesignPattern\Strategy\Impostos\Imposto;

class CalculadoraImposto{
  
  public function calcula(Orcamento $orcamento, Imposto $imposto): float{
    return $imposto->calculaImposto($orcamento);
  }
}
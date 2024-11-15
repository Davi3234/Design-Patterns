<?php
//Design Pattern Strategy
namespace App\DesignPattern;

use App\DesignPattern\Impostos\Imposto;

class CalculadoraImposto{
  
  public function calcula(Orcamento $orcamento, Imposto $imposto): float{
    return $imposto->calculaImposto($orcamento);
  }
}
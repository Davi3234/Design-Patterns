<?php
//Design Pattern Template Method
namespace App\DesignPattern\TemplateMethod;

use App\DesignPattern\Orcamento;
use App\DesignPattern\TemplateMethod\Impostos\Imposto;

class CalculadoraImposto{
  
  public function calcula(Orcamento $orcamento, Imposto $imposto): float{
    return $imposto->calculaImposto($orcamento);
  }
}
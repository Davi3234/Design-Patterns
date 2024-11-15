<?php
namespace App\DesignPattern;

use App\DesignPattern\Descontos\DescontoMais500Reais;
use App\DesignPattern\Descontos\DescontoMaisDe5Itens;
use App\DesignPattern\Descontos\SemDesconto;

class CalculadoraDesconto{

  public function calculaDescontos(Orcamento $orcamento): float{
    $cadeiaDeDescontos = new DescontoMaisDe5Itens(
      new DescontoMais500Reais
      (new SemDesconto())
    );
    
    return $cadeiaDeDescontos->calculaDesconto($orcamento);
  }
}
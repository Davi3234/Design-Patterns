<?php
//Design pattern Chain of responsability
namespace App\DesignPattern\ChainResponsability;

use App\DesignPattern\ChainResponsability\Descontos\DescontoMais500Reais;
use App\DesignPattern\ChainResponsability\Descontos\DescontoMaisDe5Itens;
use App\DesignPattern\ChainResponsability\Descontos\SemDesconto;
use App\DesignPattern\Orcamento;

class CalculadoraDesconto{

  public function calculaDescontos(Orcamento $orcamento): float{
    $cadeiaDeDescontos = new DescontoMaisDe5Itens(
      new DescontoMais500Reais
      (new SemDesconto())
    );
    
    return $cadeiaDeDescontos->calculaDesconto($orcamento);
  }
}
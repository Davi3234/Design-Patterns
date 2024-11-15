<?php
namespace App\DesignPattern\Descontos;

use App\DesignPattern\Orcamento;

class DescontoMais500Reais extends Desconto{
  public function calculaDesconto(Orcamento $orcamento): float{
    if($orcamento->valor > 500){
      return $orcamento->valor * 0.05;
    }
    
    return $this->proximoDesconto->calculaDesconto($orcamento);
  }
}
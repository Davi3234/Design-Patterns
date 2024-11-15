<?php

namespace App\DesignPattern\State\EstadosOrcamento;

use App\DesignPattern\Orcamento;

abstract class EstadoOrcamento{

  /**
   * @throws \DomainException
   */
  abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

  public function aprova(Orcamento $orcamento){
    throw new \DomainException("Este orçamento naõ pode ser aprovado.");
  }

  public function reprova(Orcamento $orcamento){
    throw new \DomainException("Este orçamento naõ pode ser reprovado.");
  }

  public function finaliza(Orcamento $orcamento){
    throw new \DomainException("Este orçamento naõ pode ser finalizado.");
  }
}
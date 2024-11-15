<?php
namespace App\DesignPattern\State\EstadosOrcamento;

use App\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento{
  public function calculaDescontoExtra(Orcamento $orcamento): float{
    throw new \DomainException("Um orçamento finalizado não pode receber desconto.");
  }
}
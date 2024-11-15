<?php
namespace App\DesignPattern\State\EstadosOrcamento;

use App\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento{
  public function calculaDescontoExtra(Orcamento $orcamento): float{
    throw new \DomainException("Um orçamento reprovado não pode receber desconto.");
  }

  public function finaliza(Orcamento $orcamento){
    $orcamento->estadoAtual = new Finalizado();
  }
}
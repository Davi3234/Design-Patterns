<?php
namespace App\DesignPattern\Command;

use App\DesignPattern\Orcamento;
use App\DesignPattern\Pedido;

class GerarPedido{
  private float $valorOrcamento;
  private int $numeroItens;
  private string $nomeCliente;
  public function __construct(
    float $valorOrcamento,
    int $numeroItens,
    string $nomeCliente
  ){
    $this->valorOrcamento = $valorOrcamento;
    $this->numeroItens = $numeroItens;
    $this->nomeCliente = $nomeCliente;
  }

  public function getValorOrcamento():float{
    return $this->valorOrcamento;
  }

  public function getNumeroItens():int{
    return $this->numeroItens;
  }

  public function getNomeCliente():string{
    return $this->nomeCliente;
  }

  public function setValorOrcamento($valorOrcamento):void{
    $this->valorOrcamento = $valorOrcamento;
  }

  public function setNumeroItens($numeroItens):void{
    $this->numeroItens = $numeroItens;
  }

  public function setNomeCliente($nomeCliente):void{
    $this->nomeCliente = $nomeCliente;
  }
}
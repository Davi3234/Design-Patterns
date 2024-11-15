<?php
namespace App\DesignPattern\Observer\AcoesAoGerarPedido;

use App\DesignPattern\Pedido;

interface AcaoAposGerarPedido{
  public function executaAcao(Pedido $pedido): void;
}
<?php

namespace App\DesignPattern\Observer\AcoesAoGerarPedido;

use App\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use App\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido{
  public function executaAcao(Pedido $pedido): void{
    echo "Salvando pedido no banco.".PHP_EOL;
  }
}
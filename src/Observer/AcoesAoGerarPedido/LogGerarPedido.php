<?php

namespace App\DesignPattern\Observer\AcoesAoGerarPedido;

use App\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use App\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido{

  public function executaAcao(Pedido $pedido): void{
    echo "Gerando log do pedido.".PHP_EOL;
  }
}
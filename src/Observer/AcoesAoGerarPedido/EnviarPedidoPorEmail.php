<?php

namespace App\DesignPattern\Observer\AcoesAoGerarPedido;

use App\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use App\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido{

  public function executaAcao(Pedido $pedido): void{
    echo "Enviando email de pedido.".PHP_EOL;
  }
}
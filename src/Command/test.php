<?php

use App\DesignPattern\Command\GerarPedido;
use App\DesignPattern\Command\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedido = new GerarPedido(
  valorOrcamento: $valorOrcamento,
  numeroItens: $numeroDeItens,
  nomeCliente: $nomeCliente
);

$geraPedidoHandler = new GerarPedidoHandler();

$geraPedidoHandler->execute($geraPedido);
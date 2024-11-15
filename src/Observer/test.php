<?php

use App\DesignPattern\Command\GerarPedido;
use App\DesignPattern\Observer\AcoesAoGerarPedido\CriarPedidoNoBanco;
use App\DesignPattern\Observer\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use App\DesignPattern\Observer\AcoesAoGerarPedido\LogGerarPedido;
use App\DesignPattern\Observer\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedido = new GerarPedido(
  valorOrcamento: $valorOrcamento,
  numeroItens: $numeroDeItens,
  nomeCliente: $nomeCliente
);

$geraPedidoHandler = new GerarPedidoHandler();

$geraPedidoHandler->addAcao(new CriarPedidoNoBanco());
$geraPedidoHandler->addAcao(new EnviarPedidoPorEmail());
$geraPedidoHandler->addAcao(new LogGerarPedido());

$geraPedidoHandler->execute($geraPedido);
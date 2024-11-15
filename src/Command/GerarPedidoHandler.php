<?php
namespace App\DesignPattern\Command;

use App\DesignPattern\Orcamento;
use App\DesignPattern\Pedido;

class GerarPedidoHandler{
  public function __construct(/* PedidoRepository, MailService */){ }

  /**
   * Somente utilizando Command o código fica um pouco sujo, com o padrão Observer iremos ajustar algumas coisas
   * @param GerarPedido $gerarPedido
   * @return void
   */
  public function execute(GerarPedido $gerarPedido): void{
    $orcamento = new Orcamento();
    $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
    $orcamento->valor = $gerarPedido->getValorOrcamento();

    $pedido = new Pedido();
    
    $pedido->dataFinalizacao = new \DateTimeImmutable();
    $pedido->nomeCliente = $gerarPedido->getNomeCliente();
    $pedido->orcamento = $orcamento;

    //PedidoRepository
    echo "Cria pedido no banco de dados " . PHP_EOL;
    //MailService
    echo "Envia e-mail para cliente " . PHP_EOL;
  }
}
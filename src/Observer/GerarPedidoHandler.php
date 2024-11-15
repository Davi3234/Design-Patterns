<?php
namespace App\DesignPattern\Observer;

use App\DesignPattern\Command\GerarPedido;
use App\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use App\DesignPattern\Orcamento;
use App\DesignPattern\Pedido;

class GerarPedidoHandler{
  /** @var AcaoAposGerarPedido[] */
  private array $acoesAposGerarPedido = [];
  public function __construct(/* PedidoRepository, MailService */){ }

    public function addAcao(AcaoAposGerarPedido $acao){
      $this->acoesAposGerarPedido[] = $acao;
    }

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

    foreach ($this->acoesAposGerarPedido as $acao) {
      $acao->executaAcao($pedido);
    }
  }
}
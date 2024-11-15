<?php
namespace App\DesignPattern;

use App\DesignPattern\State\EstadosOrcamento\EmAprovacao;
use App\DesignPattern\State\EstadosOrcamento\EstadoOrcamento;

class Orcamento {
  public float $valor;
  public int $quantidadeItens;
  public EstadoOrcamento $estadoAtual;

  public function __construct(){
    $this->estadoAtual = new EmAprovacao();
  }

  public function aplicaDescontoExtra(){
    $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
  }

  public function aprova(){
    $this->estadoAtual->aprova($this);
  }

  public function reprova(){
    $this->estadoAtual->reprova($this);
  }

  public function finaliza(){
    $this->estadoAtual->finaliza($this);
  }

}

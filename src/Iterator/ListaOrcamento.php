<?php
namespace App\DesignPattern\Iterator;

use App\DesignPattern\Orcamento;
use Iterator;
use IteratorAggregate;

class ListaOrcamento implements IteratorAggregate{
  /** @var Orcamento[] */
  private array $listaOrcamento;
  public function __construct(){
    $this->listaOrcamento = [];
  }

  public function addOrcamento(Orcamento $orcamento){
    $this->listaOrcamento[] = $orcamento;
  }
  public function getIterator(): \Traversable{
    return new \ArrayIterator($this->listaOrcamento);
  }
}
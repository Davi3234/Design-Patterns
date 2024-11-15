<?php
namespace App\DesignPattern;

class Pedido{
  public string $nomeCliente;
  public \DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;
}
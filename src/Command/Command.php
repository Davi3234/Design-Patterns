<?php

namespace App\DesignPattern\Command;

interface Command{
  public function execute(): void;
}
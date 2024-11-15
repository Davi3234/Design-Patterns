<?php

require 'vendor/autoload.php';

$tests = [
  [
    'title' => 'Testes de Strategy',
    'directory' => 'src/Strategy/test.php'
  ],
  [
    'title' => 'Testes de Chain of Responsability',
    'directory' => 'src/ChainResponsability/test.php'
  ],
  [
    'title' => 'Testes de Template Method',
    'directory' => 'src/TemplateMethod/test.php'
  ],
  [
    'title' => 'Testes de State',
    'directory' => 'src/State/test.php'
  ],
];

foreach($tests as $test){
  echo $test['title'].": \n";
  
  require_once($test['directory']);
  echo "\n";
}
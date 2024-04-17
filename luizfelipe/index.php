<?php
include 'fatura.php';
class Fatura{
  private $numero;
  private $descricao;
  private $quantidade;
  private $precoPorItens;

  public function __construct($numero,$descricao,$quantidade,$precoPorItens,){
    $this->numero = $numero;
    $this->descricao = $descricao;
    $this->quantidade = $quantidade;
    $this->precoPorItens = $precoPorItens;
  
  }
}


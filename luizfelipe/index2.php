<?php
class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoPorItem;

    public function __construct($numero, $descricao, $quantidade, $precoPorItem) {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->setQuantidade($quantidade);
        $this->setPrecoPorItem($precoPorItem);
    }

    // Métodos getters e setters
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        // Garante que a quantidade seja positiva
        $this->quantidade = max(0, $quantidade);
    }

    public function getPrecoPorItem() {
        return $this->precoPorItem;
    }

    public function setPrecoPorItem($precoPorItem) {
        // Garante que o preço por item seja positivo
        $this->precoPorItem = max(0.0, $precoPorItem);
    }

    // Método para calcular o valor total da fatura
    public function getTotalFatura() {
        return $this->quantidade * $this->precoPorItem;
    }
}

// Demonstração da classe Fatura
$fatura1 = new Fatura("123", "Mouse sem fio", 2, 29.99);
echo "Número da fatura: " . $fatura1->getNumero() . "\n";
echo "Descrição: " . $fatura1->getDescricao() . "\n";
echo "Quantidade: " . $fatura1->getQuantidade() . "\n";
echo "Preço por item: $" . $fatura1->getPrecoPorItem() . "\n";
echo "Total da fatura: $" . $fatura1->getTotalFatura() . "\n";
?>

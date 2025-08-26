<?php
class Imovel {
    protected $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function imprimeDados() {
        echo "Endereço: {$this->endereco}\n";
        echo "Preço base: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}
class Novo extends Imovel {
    private $adicional;

    public function __construct($endereco, $preco, $adicional) {
        parent::__construct($endereco, $preco);
        $this->adicional = $adicional;
    }

    public function getAdicional() {
        return $this->adicional;
    }

    public function setAdicional($adicional) {
        $this->adicional = $adicional;
    }

    public function precoFinal() {
        return $this->preco + $this->adicional;
    }

    public function imprimeAdicional() {
        echo "Adicional: R$ " . number_format($this->adicional, 2, ',', '.') . "\n";
        echo "Preço final (imóvel novo): R$ " . number_format($this->precoFinal(), 2, ',', '.') . "\n";
    }
}
class Velho extends Imovel {
    private $desconto;

    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function setDesconto($desconto) {
        $this->desconto = $desconto;
    }

    public function precoFinal() {
        return $this->preco - $this->desconto;
    }

    public function imprimeDesconto() {
        echo "Desconto: R$ " . number_format($this->desconto, 2, ',', '.') . "\n";
        echo "Preço final (imóvel velho): R$ " . number_format($this->precoFinal(), 2, ',', '.') . "\n";
    }
}
echo "--- Imóvel Novo ---\n";
$novo = new Novo("Rua Tâcredo Neves, 123", 200000, 30000);
$novo->imprimeDados();
$novo->imprimeAdicional();

echo "\n--- Imóvel Velho ---\n";
$velho = new Velho("Av. Leonel Brizolla, 456", 150000, 20000);
$velho->imprimeDados();
$velho->imprimeDesconto();

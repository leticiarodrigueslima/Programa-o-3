<?php
class Veiculo {
    public $marca;
    public $cor;
    public $ano;

    public function andar() {
        echo "andando...";
    }

    public function parar() {
        echo "parar";
    }
}

class Carro extends Veiculo {
    public function limparParaBrisa() {
        echo "Limpador Ligado";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Dar Grau";
    }
}

// Criando instância do Fusca
$fusca = new Carro();
$fusca->marca = "Volkswagen";
$fusca->cor = "Azul";
$fusca->ano = "1980";

// Exibindo informações
echo "Fusca:\n";
echo "Marca: " . $fusca->marca . "\n";
echo "Cor: " . $fusca->cor . "\n";
echo "Ano: " . $fusca->ano . "\n";

// Chamando métodos
$fusca->andar();
echo "\n";
$fusca->limparParaBrisa();
?>

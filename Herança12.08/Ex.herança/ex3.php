<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
    public $tipoCombustivel; 

    public function mostrarCombustivel() {
        echo "Este veículo é a " . $this->tipoCombustivel . "."; 
    }

    public function ligarLimpador() {
        echo "Limpador ligado";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Deu grau!";
    }
}


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->tipoCombustivel = "gasolina"; 
$carro->andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
$carro->mostrarCombustivel();
echo "<br>"; 

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->parar();
echo "<br>";
$moto->darGrau();
?>

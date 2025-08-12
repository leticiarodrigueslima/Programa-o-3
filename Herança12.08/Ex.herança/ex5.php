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
    public function ligarLimpador() {
        echo "Limpador ligado";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Deu grau!";
    }
}

class CarroEletrico extends Carro { 
    public function carregarBateria() {
        echo "Bateria carregada"; 
    }
}


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->andar();
echo "<br>";
$carro->ligarLimpador();

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->parar();
echo "<br>";
$moto->darGrau();

echo "<hr>";


$carroEletrico = new CarroEletrico();
$carroEletrico->modelo = "Tesla Model 3";
$carroEletrico->cor = "Preto";
$carroEletrico->ano = 2021;


$carroEletrico->andar();
echo "<br>";
$carroEletrico->ligarLimpador();
echo "<br>";
$carroEletrico->carregarBateria(); 
?>

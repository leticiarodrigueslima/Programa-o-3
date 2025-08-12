<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou<br>"; 
    }

    public function parar() {
        echo "Parou<br>"; 
    }
}

class Carro extends Veiculo {
    public function ligarLimpador() {
        echo "Limpador ligado<br>"; 
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Deu grau!<br>"; 
    }
}

class Caminhao extends Veiculo {
    public function carregarCarga() { 
        echo "Carga carregada com sucesso!<br>"; 
    }
}


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->andar();
$carro->ligarLimpador();

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->parar();
$moto->darGrau();

echo "<hr>";

$caminhao = new Caminhao();
$caminhao->modelo = "Volvo FH";
$caminhao->cor = "Branco";
$caminhao->ano = 2020;
$caminhao->andar();
$caminhao->carregarCarga(); 

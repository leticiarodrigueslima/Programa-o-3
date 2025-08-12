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
    public function andar() {
        echo "Moto está em movimento<br>"; 
    }

    public function darGrau() {
        echo "Deu grau!<br>"; 
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
$moto->andar(); 
echo "<br>";
$moto->darGrau(); 
?>

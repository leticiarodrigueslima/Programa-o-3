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


$carro1 = new Carro();
$carro1->modelo = "Gol";
$carro1->cor = "Vermelho";
$carro1->ano = 2018;
$carro1->andar();
echo "<br>";
$carro1->ligarLimpador();
echo "<br>";


$carro2 = new Carro();
$carro2->modelo = "Fusca";
$carro2->cor = "Azul";
$carro2->ano = 1975;
$carro2->andar();
echo "<br>";
$carro2->parar();
echo "<br>";

echo "<hr>";


$moto1 = new Moto();
$moto1->modelo = "Honda Biz";
$moto1->cor = "Preto";
$moto1->ano = 2020;
$moto1->andar();
echo "<br>";
$moto1->darGrau();
echo "<br>";


$moto2 = new Moto();
$moto2->modelo = "Yamaha YBR";
$moto2->cor = "Branco";
$moto2->ano = 2019;
$moto2->parar();
echo "<br>";
$moto2->darGrau();
?>

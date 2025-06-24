
<?php
//Classe:Uma classe é um molde ou um "template" que define propriedades (variáveis) e métodos (funções) que os objetos criados a partir dessa classe terão. Em termos simples, a classe serve como uma descrição de como um objeto se comportará e quais características ele terá.
//Objeto:Um objeto é uma instância de uma classe. Em outras palavras, um objeto é um "exemplar" de uma classe que possui seus próprios valores para as propriedades e pode utilizar os métodos definidos na classe.


class Cadeira {
      public $cor;
    public $material;
    public $numeroDePernas;
    public $altura; 

      public function __construct($cor, $material, $numeroDePernas, $altura) {
        $this->cor = $cor;
        $this->material = $material;
        $this->numeroDePernas = $numeroDePernas;
        $this->altura = $altura;
    }

    public function ajustarAltura($novaAltura) {
        $this->altura = $novaAltura;
        echo "A altura da cadeira foi ajustada para $novaAltura cm.<br><br>\n";
    }

       public function exibirDetalhes() {
        echo "Cadeira de cor {$this->cor}, feita de {$this->material}, com {$this->numeroDePernas} pernas e altura de {$this->altura} cm.<br><br>\n";
    }
}
?>


<?php
$cadeira1 = new Cadeira("Preta", "Madeira", 4, 90);
$cadeira2 = new Cadeira("Branca", "Plástico", 3, 80);

$cadeira1->exibirDetalhes();
$cadeira2->exibirDetalhes();

$cadeira1->ajustarAltura(95);
$cadeira2->ajustarAltura(85);

$cadeira1->exibirDetalhes();
$cadeira2->exibirDetalhes();
?>


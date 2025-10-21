<?php
require_once 'ex_3.php';

class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "Bolsa renovada com sucesso!<br>";
    }

    public function pagarMensalidade() {
        echo "Mensalidade paga com desconto por {$this->nome}!<br>";
    }
}

$b1 = new Bolsista("Ana", 21, "F", "2025B03", "Engenharia", "50%");
$b1->renovarBolsa();
$b1->pagarMensalidade();
$b1->fazerAniversario();
?>

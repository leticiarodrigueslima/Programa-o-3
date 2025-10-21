<?php
require_once 'ex_1.php';
require_once 'ex_3.php';
require_once 'ex_4.php';

class Professor extends Pessoa {
    protected $especialidade;
    protected $salario;

    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "{$this->nome} recebeu aumento de R$ {$valor}. Salário atual: R$ {$this->salario}<br>";
    }
}

$alunos = [
    new Aluno("João", 18, "M", "A001", "Informática"),
    new Aluno("Lívia", 19, "F", "A002", "Design"),
    new Bolsista("Pedro", 20, "M", "B003", "Engenharia", "75%"),
    new Professor("Marta", 40, "F", "Matemática", 4000)
];

foreach ($alunos as $obj) {
    echo "<hr>Classe: " . get_class($obj) . "<br>";

    if ($obj instanceof Aluno) {
        $obj->pagarMensalidade();
    }
    if ($obj instanceof Bolsista) {
        $obj->renovarBolsa();
    }
    if ($obj instanceof Professor) {
        $obj->receberAumento(500);
    }
}

echo "<hr>A classe raiz é Pessoa.<br>";
echo "As classes folhas são: Visitante, Aluno, Bolsista e Professor.<br>";
?>

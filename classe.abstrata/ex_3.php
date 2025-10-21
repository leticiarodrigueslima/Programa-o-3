<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    abstract public function mostrarDetalhes();

    final public function fazerAniversario() {
        $this->idade += 1;
        echo "{$this->nome} fez aniversário! Agora tem {$this->idade} anos.<br>";
    }
}

class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function pagarMensalidade() {
        echo "Mensalidade paga por {$this->nome}!<br>";
    }

    public function mostrarDetalhes() {
        echo "Nome: {$this->nome}<br>Idade: {$this->idade}<br>Sexo: {$this->sexo}<br>Curso: {$this->curso}<br><hr>";
    }
}

$a1 = new Aluno("Megan", 21, "F", "2025A15", "Informática");
$a1->mostrarDetalhes();
$a1->pagarMensalidade();
$a1->fazerAniversario();
?>

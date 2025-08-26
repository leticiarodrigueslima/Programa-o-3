<?php
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function addAumento($valor) {
        $this->salario += $valor;
    }

    public function ganhoAnual() {
        return $this->salario * 12;
    }

    public function exibeDados() {
        echo "Nome: {$this->nome}\n";
        echo "Salário: {$this->salario}\n";
        echo "Ganho Anual: {$this->ganhoAnual()}\n";
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}
class Assistente extends Funcionario {
    private $matricula;

    public function __construct($nome, $salario, $matricula) {
        parent::__construct($nome, $salario);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Matrícula: {$this->matricula}\n";
    }
}
class Tecnico extends Assistente {
    private $bonusSalarial;

    public function __construct($nome, $salario, $matricula, $bonusSalarial) {
        parent::__construct($nome, $salario, $matricula);
        $this->bonusSalarial = $bonusSalarial;
    }

    public function ganhoAnual() {
        return ($this->salario + $this->bonusSalarial) * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Bônus Salarial: {$this->bonusSalarial}\n";
    }
}
class Administrativo extends Assistente {
    private $turno;
    private $adicionalNoturno;

    public function __construct($nome, $salario, $matricula, $turno, $adicionalNoturno) {
        parent::__construct($nome, $salario, $matricula);
        $this->turno = $turno;
        $this->adicionalNoturno = $adicionalNoturno;
    }

    public function ganhoAnual() {
        if (strtolower($this->turno) === "noite") {
            return ($this->salario + $this->adicionalNoturno) * 12;
        } else {
            return parent::ganhoAnual();
        }
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Turno: {$this->turno}\n";
        if (strtolower($this->turno) === "noite") {
            echo "Adicional Noturno: {$this->adicionalNoturno}\n";
        }
    }
}
echo "--- Funcionário ---\n";
$f1 = new Funcionario("Bruno", 10000);
$f1->exibeDados();

echo "\n--- Assistente ---\n";
$a1 = new Assistente("Thiago", 15000, 12345);
$a1->exibeDados();

echo "\n--- Técnico ---\n";
$t1 = new Tecnico("Henrique", 3200, 54321, 500);
$t1->exibeDados();
echo "Ganho Anual (com bônus): " . $t1->ganhoAnual() . "\n";

echo "\n--- Administrativo (Noite) ---\n";
$ad1 = new Administrativo("Roberta", 2800, 67890, "noite", 600);
$ad1->exibeDados();
echo "Ganho Anual (com adicional noturno): " . $ad1->ganhoAnual() . "\n";

echo "\n--- Administrativo (Dia) ---\n";
$ad2 = new Administrativo("Wenderson", 2800, 98765, "dia", 600);
$ad2->exibeDados();
echo "Ganho Anual (sem adicional noturno): " . $ad2->ganhoAnual() . "\n";

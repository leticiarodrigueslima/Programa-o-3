<?php
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Assistente extends Funcionario {
    protected $matricula;

    public function __construct($nome, $salario, $matricula) {
        parent::__construct($nome, $salario);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }
}

class Tecnico extends Assistente {
    private $bonus;
    public function __construct($nome, $salario, $matricula, $bonus) {
        parent::__construct($nome, $salario, $matricula);
        $this->bonus = $bonus;
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
}
abstract class Animal {
    public function caminhar() {
        echo "O animal está caminhando...\n";
    }
}
class Cachorro extends Animal {
    public function latir() {
        echo "O cachorro está latindo: Au Au!\n";
    }
}
class Gato extends Animal {
    public function miar() {
        echo "O gato está miando: Miau!\n";
    }
}
class Pessoa {
    protected $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
}
class Rica extends Pessoa {
    public function fazCompras() {
        echo "{$this->nome} está fazendo compras de luxo!\n";
    }
}
class Pobre extends Pessoa {
    public function trabalha() {
        echo "{$this->nome} está trabalhando duro.\n";
    }
}
class Miseravel extends Pessoa {
    public function mendiga() {
        echo "{$this->nome} está pedindo esmolas.\n";
    }
}
class Ingresso {
    protected $valor;
    public function __construct($valor) {
        $this->valor = $valor;
    }
    public function imprimeValor() {
        echo "Valor: R$ {$this->valor}\n";
    }
}
class VIP extends Ingresso {
    protected $extra;
    public function __construct($valor, $extra) {
        parent::__construct($valor);
        $this->extra = $extra;
    }
    public function getValorVIP() {
        return $this->valor + $this->extra;
    }
}
class Normal extends Ingresso {
    public function imprimeTipo() {
        echo "Ingresso Normal\n";
    }
}
class CamaroteSuperior extends VIP {
    private $extraSuperior;
    public function __construct($valor, $extra, $extraSuperior) {
        parent::__construct($valor, $extra);
        $this->extraSuperior = $extraSuperior;
    }
    public function getValorCamarote() {
        return $this->getValorVIP() + $this->extraSuperior;
    }
}
class CamaroteInferior extends VIP {
    private $localizacao;
    public function __construct($valor, $extra, $localizacao) {
        parent::__construct($valor, $extra);
        $this->localizacao = $localizacao;
    }
    public function getLocalizacao() {
        return $this->localizacao;
    }
}
class Imovel {
    protected $endereco;
    protected $preco;
    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }
}
class Novo extends Imovel {
    private $adicional;
    public function __construct($endereco, $preco, $adicional) {
        parent::__construct($endereco, $preco);
        $this->adicional = $adicional;
    }
    public function getPrecoFinal() {
        return $this->preco + $this->adicional;
    }
}
class Velho extends Imovel {
    private $desconto;
    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }
    public function getPrecoFinal() {
        return $this->preco - $this->desconto;
    }
}
echo "--- a) Assistente Administrativo e Técnico ---\n";
$adm = new Administrativo("Maria", 2500, 111, "Noite", 500);
$tec = new Tecnico("Carlos", 3000, 222, 400);
echo "Administrativo: Nome={$adm->getNome()}, Matrícula={$adm->getMatricula()}\n";
echo "Técnico: Nome={$tec->getNome()}, Matrícula={$tec->getMatricula()}\n";

echo "\n--- b) Animais ---\n";
$cao = new Cachorro();
$cao->latir();
$cao->caminhar();
$gato = new Gato();
$gato->miar();
$gato->caminhar();

echo "\n--- c) Rica, Pobre e Miserável ---\n";
$r = new Rica("Roberta");
$p = new Pobre("Henrique");
$m = new Miseravel("Carlos Rato");
$r->fazCompras();
$p->trabalha();
$m->mendiga();

echo "\n--- d) Ingresso ---\n";
$tipo = readline("Digite 1 para Normal ou 2 para VIP: ");
if ($tipo == 1) {
    $n = new Normal(50);
    $n->imprimeTipo();
    $n->imprimeValor();
} else {
    $vip = readline("Digite 1 para Camarote Superior ou 2 para Camarote Inferior: ");
    if ($vip == 1) {
        $cs = new CamaroteSuperior(50, 20, 30);
        echo "Ingresso VIP - Camarote Superior\n";
        echo "Valor: R$ " . $cs->getValorCamarote() . "\n";
    } else {
        $ci = new CamaroteInferior(50, 20, "Setor A - Frente do Palco");
        echo "Ingresso VIP - Camarote Inferior\n";
        echo "Valor: R$ " . $ci->getValorVIP() . "\n";
        echo "Localização: " . $ci->getLocalizacao() . "\n";
    }
}

echo "\n--- e) Imóvel ---\n";
$tipoImovel = readline("Digite 1 para Novo ou 2 para Velho: ");
if ($tipoImovel == 1) {
    $novo = new Novo("Rua Tâncredo Nves, 123", 200000, 30000);
    echo "Imóvel Novo - Preço final: R$ " . $novo->getPrecoFinal() . "\n";
} else {
    $velho = new Velho("Av. Leonal Brizolla, 456", 150000, 20000);
    echo "Imóvel Velho - Preço final: R$ " . $velho->getPrecoFinal() . "\n";
}

?>
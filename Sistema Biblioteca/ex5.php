<?php

class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
    protected $leitorAtual; // Novo atributo

    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
        $this->leitorAtual = null; // Começa nulo
    }

    // Gettxxx
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }

    public function getLeitorAtual() {
        return $this->leitorAtual; // Método para obter o leitor atual
    }

    // Settxxxx
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setAnoPublicacao($anoPublicacao) {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    public function exibirInformacoes() {
        echo "<div class=\"card\">";
        echo "<h2>" . ($this->getTitulo()) . "</h2>";
        echo "<p><strong>Autor:</strong> " . ($this->getAutor()) . "</p>";
        echo "<p><strong>Ano de Publicação:</strong> " . ($this->getAnoPublicacao()) . "</p>";
        echo "<p><strong>Disponível:</strong> " . ($this->getDisponivel() ? "Sim" : "Não") . "</p>";
        echo "<p><strong>Leitor Atual:</strong> " . ($this->getLeitorAtual() ? ($this->getLeitorAtual()) : "Nenhum") . "</p>";
        echo "</div>";
    }

    // cntl empréstimo
    public function emprestar($leitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $leitor; // Armazena o nome do leitor
            echo "<p>Livro '<strong>" . ($this->titulo) . "</strong>' emprestado com sucesso para <strong>" . ($leitor) . "</strong>.</p>";
        } else {
            echo "<p>Livro '<strong>" . ($this->titulo) . "</strong>' já está emprestado.</p>";
        }
    }

    public function devolver() {
        if ($this->leitorAtual) {
            echo "<p>Livro '<strong>" . ($this->titulo) . "</strong>' devolvido com sucesso por <strong>" . ($this->leitorAtual) . "</strong>.</p>";
            $this->leitorAtual = null; // Limpa o nome do leitor atual
            $this->disponivel = true; // Torna o livro disponível novamente
        } else {
            echo "<p>O livro '<strong>" . ($this->titulo) . "</strong>' não está emprestado.</p>";
        }
    }

    public function quemPegou() {
        return $this->leitorAtual; // Retorna o nome do leitor atual
    }

    public function estaDisponivel() {
        if ($this->disponivel) {
            return "<p>O livro '<strong>" . ($this->titulo) . "</strong>' está disponível para empréstimo.</p>";
        } else {
            return "<p>O livro '<strong>" . ($this->titulo) . "</strong>' não está disponível para empréstimo.</p>";
        }
    }
}

// leitor
class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // getxxx
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    // Setxxxxx
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    
    public function exibirLeitor() {
        echo "<div class=\"card leitor-card\">";
        echo "<h2>Leitor: " . ($this->getNome()) . "</h2>";
        echo "<p><strong>Email:</strong> " . ($this->getEmail()) . "</p>";
        echo "<p><strong>Telefone:</strong> " . ($this->getTelefone()) . "</p>";
        echo "</div>";
    }
}


class Biblioteca {
    public $nomeBiblioteca;
    private $livros = []; 
    private $leitores = []; 

    public function __construct($nome) {
        $this->nomeBiblioteca = $nome;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        echo "<h2>Livros na Biblioteca '{$this->nomeBiblioteca}':</h2>";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
        }
    }

    public function listarLeitores() {
        echo "<h2>Leitores da Biblioteca '{$this->nomeBiblioteca}':</h2>";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
        }
    }
}

?>

<h1>Biblioteca lele - Controle de Livros e Leitores;) </h1>

<?php
$biblioteca = new Biblioteca("Biblioteca Lele");

$livro1 = new Livro("O tatuador de Aushiwitz", "Heather Morris", 2017, true);
$livro2 = new Livro("Torto Arado", "Itamar Vieira Junior", 2019, false);
$livro3 = new Livro("1984", "George Orwell", 1949, true);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$leitor1 = new Leitor("Lele Lima", "lele.lima@email.com", "(55) 99999-2549");
$leitor2 = new Leitor("Bruno Siqueira", "siqueira.bruno@email.com", "(55) 98888-1234");

$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

echo "<section>";
$biblioteca->listarLivros();
echo "</section>";

echo "<section>";
$biblioteca->listarLeitores();
echo "</section>";

echo "<section>";
echo "<h2>Movimentos: Empréstimos e Devoluções</h2>";

echo "<h3>Empréstimo do primeiro livro para o leitor:</h3>";
$livro1->emprestar($leitor1->getNome());
echo $livro1->estaDisponivel();

echo "<h3>Tentativa de empréstimo do segundo livro:</h3>";
$livro2->emprestar($leitor1->getNome());
echo $livro2->estaDisponivel();

echo "<h3>Devolução do primeiro livro:</h3>";
$livro1->devolver();
echo $livro1->estaDisponivel();

echo "</section>";
?>

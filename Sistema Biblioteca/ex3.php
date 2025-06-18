<?php

// Pt Exercício 2 (com emprestar, devolver, etc.)
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;

    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
    }

    // Getters
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

    // Setters
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

    // livro
    public function exibirInformacoes() {
        echo "<div class=\"card\">";
        echo "<h2>" . htmlspecialchars($this->getTitulo()) . "</h2>";
        echo "<p><strong>Autor:</strong> " . htmlspecialchars($this->getAutor()) . "</p>";
        echo "<p><strong>Ano de Publicação:</strong> " . htmlspecialchars($this->getAnoPublicacao()) . "</p>";
        echo "<p><strong>Disponível:</strong> " . ($this->getDisponivel() ? "Sim" : "Não") . "</p>";
        echo "</div>";
    }

    // cntl empréstimo
    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "<p>Livro '<strong>" . htmlspecialchars($this->titulo) . "</strong>' emprestado com sucesso.</p>";
        } else {
            echo "<p>Livro '<strong>" . htmlspecialchars($this->titulo) . "</strong>' já está emprestado.</p>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "<p>Livro '<strong>" . htmlspecialchars($this->titulo) . "</strong>' devolvido com sucesso.</p>";
    }

    public function estaDisponivel() {
        if ($this->disponivel) {
            return "<p>O livro '<strong>" . htmlspecialchars($this->titulo) . "</strong>' está disponível para empréstimo.</p>";
        } else {
            return "<p>O livro '<strong>" . htmlspecialchars($this->titulo) . "</strong>' não está disponível para empréstimo.</p>";
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

    // dados leitor
    public function exibirLeitor() {
        echo "<div class=\"card leitor-card\">";
        echo "<h2>Leitor: " . htmlspecialchars($this->getNome()) . "</h2>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($this->getEmail()) . "</p>";
        echo "<p><strong>Telefone:</strong> " . htmlspecialchars($this->getTelefone()) . "</p>";
        echo "</div>";
    }
}

?>

<h1>Biblioteca lele - Controle de Livros e Leitores;) </h1>

<?php
// Simulação 1 e 2:
$livro1 = new Livro("O tatuador de Aushiwitz", "Heather Morris", 2017, true);
$livro2 = new Livro("Torto Arado", "Itamar Vieira Junior", 2019, false);

echo "<section>";
echo "<h2>Livros e sua disponibilidade:</h2>";
echo $livro1->estaDisponivel();
echo $livro2->estaDisponivel();

echo "<h3>Livro 1 - Informações completas:</h3>";
$livro1->exibirInformacoes();

echo "<h3>Livro 2 - Informações completas:</h3>";
$livro2->exibirInformacoes();

echo "</section>";

echo "<section>";
echo "<h2>Movimentos: Empréstimos e Devoluções</h2>";

echo "<h3>Empréstimo do primeiro livro:</h3>";
$livro1->emprestar();
echo $livro1->estaDisponivel();

echo "<h3>Tentativa de empréstimo do sgundo livro:</h3>";
$livro2->emprestar();
echo $livro2->estaDisponivel();

echo "<h3>Devolução do primeiro livro:</h3>";
$livro1->devolver();
echo $livro1->estaDisponivel();

echo "</section>";

// Simulação do leitor AAAAAAAAA
$leitor = new Leitor("Lele Lima", "lele.lima@email.com", "(55) 99999-2549");

echo "<section>";
echo "<h2>Informações do leitor:</h2>";
$leitor->exibirLeitor();
echo "</section>";
?>



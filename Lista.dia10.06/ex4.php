<?php

// Classe Livro conforme do Exercício 3 (com emprestar, devolver, etc.)
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;
    protected $leitorAtual; // Novo atributo: leitorAtual

    public function __construct($titulo, $autor, $anoPublicacao, $disponivel) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel;
        $this->leitorAtual = null; // Inicializa leitorAtual como nulo
    }

  
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

    // Exibir informações do livro
    public function exibirInformacoes() {
        echo "<div class=\"card\">";
        echo "<h2>" . ($this->getTitulo()) . "</h2>";
        echo "<p><strong>Autor:</strong> " . ($this->getAutor()) . "</p>";
        echo "<p><strong>Ano de Publicação:</strong> " . ($this->getAnoPublicacao()) . "</p>";
        echo "<p><strong>Disponível:</strong> " . ($this->getDisponivel() ? "Sim" : "Não") . "</p>";
        echo "</div>";
    }

 
    public function emprestar($nomeLeitor) { // Recebe o nome do leitor como parâmetro
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor; // Define o leitor atual
            echo "<p>Livro '<strong>" . ($this->titulo) . "</strong>' emprestado para <strong>" . ($nomeLeitor) . "</strong> com sucesso.</p>";
        } else {
            echo "<p>Livro '<strong>" . ($this->titulo) . "</strong>' já está emprestado.</p>";
        }
    }

    public function devolver() {
        $nomeLeitor = $this->leitorAtual;
        $this->disponivel = true;
        $this->leitorAtual = null; // Apaga o nome do leitor atual
        echo "<p>Livro '<strong>" ($this->titulo) . "</strong>' devolvido por <strong>" . ($nomeLeitor) . "</strong> com sucesso.</p>";
       
    }

    public function estaDisponivel() {
        if ($this->disponivel) {
            return "<p>O livro '<strong>" . ($this->titulo) . "</strong>' está disponível para empréstimo.</p>";
        } else {
            return "<p>O livro '<strong>" . ($this->titulo) . "</strong>' não está disponível para empréstimo.</p>";
        }
    }

    public function quemPegou() { // Novo método: quemPegou()
        if ($this->leitorAtual) {
            return "<p>O livro '<strong>" .  ($this->titulo) . "</strong>' está emprestado para <strong>" . ($this->leitorAtual) . "</strong>.</p>";
        } else {
            return "<p>O livro '<strong>" . ($this->titulo) . "</strong>' não está emprestado para ninguém no momento.</p>";
        }
    }
}


class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }


    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

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
        echo "<h2>Leitor: " . htmlspecialchars($this->getNome()) . "</h2>";
        echo "<p><strong>Email:</strong> " . ($this->getEmail()) . "</p>";
        echo "<p><strong>Telefone:</strong> " . ($this->getTelefone()) . "</p>";
        echo "</div>";
    }
}

?>

<h1>Biblioteca lele - Controle de Livros e Leitores;)</h1>

<?php

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


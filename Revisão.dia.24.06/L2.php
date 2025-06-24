<?php
class Livro {
    
    public $titulo;
    public $autor;
    public $disponivel; 

    
    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true; 
    }

    public function Emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro '{$this->titulo}' emprestado com sucesso!<br><br>\n";
        } else {
            echo "O livro '{$this->titulo}' não está disponível no momento.<br><br>\n";//Aparentemente é possível esquecer o básico, esqueci como quebra linha =)
        }
    }

    public function Devolver() {
        $this->disponivel = true;
        echo "Livro '{$this->titulo}' devolvido com sucesso!<br><br>\n";
    }

    public function getDisponivel() {
        return $this->disponivel;
    }
}

class Aluno {
    public $nome;
    public $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function Pegarlivro(Livro $livro) {
        if ($livro->getDisponivel()) {
            $livro->Emprestar();
            echo "{$this->nome} (Matrícula: {$this->matricula}) pegou o livro '{$livro->titulo}' emprestado.<br><br>\n";
        } else {
            echo "Desculpe, o livro '{$livro->titulo}' não está disponível para empréstimo no momento.<br><br>\n";
        }
    }

    public function getname() {
        return $this->nome;
    }

    public function getmatricula() {
        return $this->matricula;
    }
}

$livro1 = new Livro("Torto Arado", "Itamar Vieira Junior");
$livro2 = new Livro("Em Algum Lugar nas Estrelas", "Claudia Gray");
$livro3 = new Livro("Nevernight: A Sombra do Corvo", "Jay Kristoff");

$aluno1 = new Aluno("Bruno Siqueira", "12345");
$aluno2 = new Aluno("Leticia Rodrigues", "67890");
$aluno3 = new Aluno("Antônio Cândido", "54321");

$aluno1->Pegarlivro($livro1);
$aluno2->Pegarlivro($livro2);
$aluno3->Pegarlivro($livro3); 

$aluno1->Pegarlivro($livro2); 
$aluno2->Pegarlivro($livro1); 

$livro1->Devolver(); 
$livro2->Devolver();  


$aluno2->Pegarlivro($livro1);  
$aluno1->Pegarlivro($livro2);  
?>


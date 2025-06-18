<?php

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

    public function exibirInformacoes() {
        echo "Título: " . $this->getTitulo() . "<br>";
        echo "Autor: " . $this->getAutor() . "<br>";
        echo "Ano de Publicação: " . $this->getAnoPublicacao() . "<br>";
        echo "Disponível: " . ($this->getDisponivel() ? "Sim" : "Não") . "<br>";
    }

   // controlar emprestimo
    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro '" . $this->titulo . "' emprestado com sucesso.<br>";
        } else {
            echo "Livro '" . $this->titulo . "' já está emprestado.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro '" . $this->titulo . "' devolvido com sucesso.<br>";
    }

    public function estaDisponivel() {
        if ($this->disponivel) {
            return "O livro '" . $this->titulo . "' está disponível para empréstimo.<br>";
        } else {
            return "O livro '" . $this->titulo . "' não está disponível para empréstimo.<br>";
        }
    }
}

// simulação 1 e 2:
$livro1 = new Livro("O tatuador de Aushiwitz", "Heather Morris", 2017, true);
$livro2 = new Livro("Torto Arado", "Itamar Vieira Junior", 2019, false);

echo "<b>Livros e sua disponibilidade:</b><br>";
echo $livro1->estaDisponivel();
echo $livro2->estaDisponivel();

echo "<br><b>Empréstimo do primeiro livro:</b><br>";
$livro1->emprestar();
echo $livro1->estaDisponivel();

echo "<br><b>Tentativa de empréstimo do segundo livro:</b><br>";
$livro2->emprestar();
echo $livro2->estaDisponivel();

echo "<br><b>Devolução do primeiro livro:</b><br>";
$livro1->devolver();
echo $livro1->estaDisponivel();

?>
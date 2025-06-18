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

    // Utilizando o método Get p/ Título, Autor, Anopubli, Disponíbilidade
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



    // Utilizando o método Set p/ Título, Autor, Anopubli, Disponíbilidade
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




    
    // Desafio bônus
    public function exibirInformacoes() {
        echo "Título: " . $this->getTitulo() . "<br>";
        echo "Autor: " . $this->getAutor() . "<br>";
        echo "Ano de Publicação: " . $this->getAnoPublicacao() . "<br>";
        echo "Disponível: " . ($this->getDisponivel() ? "Sim" : "Não") . "<br>";
    }
}



// Exemplos de utilização:
$meuLivro = new Livro("O fabricante de lágrimas", "Erin Doom", 2021, true);

echo "<b>Informações do Livro:<br>";
$meuLivro->exibirInformacoes();

echo "<br>";
echo "<b>Alterando o título:<br>";
$meuLivro->setTitulo("O Senhor dos Anéis: A Sociedade do Anel");
$meuLivro->exibirInformacoes();


?>
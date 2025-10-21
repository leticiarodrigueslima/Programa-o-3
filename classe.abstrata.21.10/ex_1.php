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

    final public function fazerAniversario() {
        $this->idade++;
        echo "Felicidades, {$this->nome}! Tu agora tem {$this->idade} anos!";
    }

    abstract public function mostrarDetalhes();
}
//ñ exibe saída 
?>

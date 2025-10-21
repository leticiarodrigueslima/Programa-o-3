<?php
/*
============================================
   ATIVIDADES — Herança e Classes Abstratas
============================================

1) O que é uma classe abstrata?
   → Uma classe abstrata é um modelo/base que define atributos e métodos comuns,
     mas NÃO pode ser instanciada diretamente. Serve como base para subclasses.

2) Qual é a diferença entre uma classe abstrata e uma classe final?
   → Classe abstrata: não pode ser instanciada e serve para ser herdada.
   → Classe final: não pode ser herdada por nenhuma outra classe.

--------------------------------------------

3) Hierarquia exemplo:

   Pessoa
     ├── Aluno
     │     ├── Bolsista
     │     └── Técnico
     └── Professor

   a) Superclasse de Aluno → Pessoa
   b) Subclasse de Aluno → Bolsista e Técnico
   c) Ancestral de Bolsista → Aluno (pai direto) e Pessoa (ancestral superior)

--------------------------------------------

4) Complete o quadro:

   - Serve apenas como modelo base .......... Classe abstrata
   - Não pode ser herdada ................... Classe final
   - Não pode ser instanciada ............... Classe abstrata
   - Método que deve ser implementado ....... Método abstrato
   - Método que não pode ser sobrescrito .... Método final

--------------------------------------------

5) PRÁTICA EM PHP
   Criação de uma classe abstrata Veiculo
   e duas classes filhas (Carro e Bicicleta)
   que implementam o método mover()
*/

abstract class Veiculo {
    protected $modelo;
    protected $ano;

    public function __construct($modelo, $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    abstract public function mover();
}

class Carro extends Veiculo {
    public function mover() {
        echo "O carro {$this->modelo} ({$this->ano}) está dirigindo pelas ruas.\n";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        echo "A bicicleta {$this->modelo} ({$this->ano}) está sendo pedalada.\n";
    }
}

$carro = new Carro("Jetta", 2012);
$carro->mover();

$bici = new Bicicleta("KSW", 2020);
$bici->mover();

<?php

class caneta{
    private $ponta;
    private $cor;

    public function setPonta($ponta) {
        $this->ponta = $ponta;   
    } 
    public function getPonta() {
        return $this->ponta;
        echo "Ponta da caneta: " . $this->ponta. "<br>";    
    }
    public function __construct ($ponta, $cor) {
        $this->ponta = $ponta;
        $this->cor = $cor;
    }
    public function setCor($cor) {
        $this->ponta = $cor;    
        echo "Ponta da cor: " . $this->cor. "<br>";    
    } 
    public function getCor() {
        return $this->cor;
    }
    public function mostracaneta() {
        echo"<br> ##### <br> Caneta: <br> Ponta:" . $this->ponta;
        echo"<br> Cor: " . $this->cor;
    }

}

$c1= new caneta(10, "preta");
$c1->getPonta();
$c1->getCor();
$c1->getCor("cinza");
$c1->getCor();
$c1->mostracaneta();

$c2 = new caneta(15, "vermelha");
$c2 ->mostracaneta();
class carro {
  private $modelo;
  private $cor;
  private $ano;
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getModelo(){
        echo "<br> ######## <br> Modelo: ", $this->modelo;
    }
    public function getCor(){
        echo "<br> Cor: ", $this->cor;
    }
    public function getAno(){
        echo "<br> Ano: ", $this->ano;
    }
    public function __construct($modelo, $cor, $ano){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }  
}
$carro1 = new carro("Storm", "cinza", 2018);
$carro1->getModelo();
$carro1->getCor();
$carro1->getAno();
?>

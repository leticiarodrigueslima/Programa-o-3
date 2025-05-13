<?php
class Caneta {
    public $marca;
    private $ponta;
    private $cor;
    public $tipo;
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
}
$c1 = new Caneta();
$c2 = new Caneta();
$c1->marca = "BIC";
$c1->setCor("Azul");
print_r($c1);
echo "A cor da caneta é: " . $c1->getCor() . "<br>"; 
print_r($c2);
?>

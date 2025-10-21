<?php
require_once 'ex_1.php';


class Visitante extends Pessoa {
    
}

$v1 = new Visitante("Maria", 25, "F");
$v1->fazerAniversario(); 
//ñ exibe saída
?>


<?php
class ContaBancaria {
    private string $titular;
    private float $saldo;

    // a) Construtor para iniciar valores
    public function __construct(string $titular, float $saldo = 0) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    // b) Método sacar com validações
    public function sacar(float $valor): void {
        if ($valor <= 0) {
            echo "Valor de saque deve ser positivo.\n";
            return;
        }
        
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para saque.\n";
            return;
        }
        
        $this->saldo -= $valor;
        echo sprintf("Saque de R$ %.2f realizado. Saldo atual: R$ %.2f<br><br>\n", $valor, $this->saldo);
    }

    public function depositar(float $valor): void {
        if ($valor <= 0) {
            echo "Valor de depósito deve ser positivo.<br><br>\n";
            return;
        }
        
        $this->saldo += $valor;
        echo sprintf("Depósito de R$ %.2f realizado. Saldo atual: R$ %.2f <br><br>\n", $valor, $this->saldo);
    }

    // c) Método getTitular
    public function getTitular(): string {
        return $this->titular;
    }

    // c) Método getSaldo
    public function getSaldo(): float {
        return $this->saldo;
    }
}

$conta = new ContaBancaria("Maria Oliveira", 1500.50);
$conta->depositar(500.75);
$conta->sacar(200.25);

echo "Titular: " . $conta->getTitular() . "<br><br>\n";
echo "Saldo atual: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";
?>

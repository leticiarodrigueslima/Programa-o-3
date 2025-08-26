<?php
class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function imprimeValor() {
        echo "Valor do ingresso: R$ " . number_format($this->valor, 2, ',', '.') . "\n";
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}
class VIP extends Ingresso {
    protected $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorVIP() {
        return $this->valor + $this->valorAdicional;
    }

    public function imprimeValor() {
        echo "Valor do ingresso VIP: R$ " . number_format($this->getValorVIP(), 2, ',', '.') . "\n";
    }
}
class Normal extends Ingresso {
    public function imprimeNormal() {
        echo "Ingresso Normal\n";
        $this->imprimeValor();
    }
}
class CamaroteInferior extends VIP {
    private $localizacao;

    public function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function imprimeLocalizacao() {
        echo "Localização do camarote inferior: {$this->localizacao}\n";
    }
}
class CamaroteSuperior extends VIP {
    private $valorExtraSuperior;

    public function __construct($valor, $valorAdicional, $valorExtraSuperior) {
        parent::__construct($valor, $valorAdicional);
        $this->valorExtraSuperior = $valorExtraSuperior;
    }

    public function getValorCamaroteSuperior() {
        return $this->getValorVIP() + $this->valorExtraSuperior;
    }

    public function imprimeValor() {
        echo "Valor do camarote superior: R$ " . number_format($this->getValorCamaroteSuperior(), 2, ',', '.') . "\n";
    }
}
echo "--- Ingresso Normal ---\n";
$ingressoNormal = new Normal(50);
$ingressoNormal->imprimeNormal();

echo "\n--- Ingresso VIP ---\n";
$ingressoVIP = new VIP(50, 20);
$ingressoVIP->imprimeValor();

echo "\n--- Camarote Inferior ---\n";
$camaroteInferior = new CamaroteInferior(50, 20, "Setor A - Frente do Palco");
$camaroteInferior->imprimeValor();
$camaroteInferior->imprimeLocalizacao();

echo "\n--- Camarote Superior ---\n";
$camaroteSuperior = new CamaroteSuperior(50, 20, 30);
$camaroteSuperior->imprimeValor();

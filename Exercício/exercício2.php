<?php

class contaBancaria{
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipo;

    public function depositar($valorDeposito){
        $this->saldo += $valorDeposito;
        echo "Você realizou um depósito<br>";
    }

    public function sacar($valorSaque){
        if ($this->saldo <= 0) {
            echo "Você não possui saldo em sua conta!<br>";
        } elseif ($this->saldo < $valorSaque){
            echo "Saldo insuficiente!<br>";
        } else {
            $this->saldo -= $valorSaque;
            echo "Você realizou um saque!<br>";
        }
    }

    public function consultarSaldo(){
        echo "Saldo atual: R$". number_format($this->saldo, 2, ',', '.'). "<br>";
        echo "<br>";
    }
}

$conta1 = new contaBancaria();
$conta1-> titular = 'João';
$conta1-> numero = 12312421;
$conta1-> saldo = 120.50;
$conta1-> tipo = "Corrente";

$conta2 = new contaBancaria();
$conta2-> titular = 'Tobias';
$conta2-> numero = 223523566;
$conta2-> saldo = 130.50;
$conta2-> tipo = "Poupança";

echo "<h1 style='text-align:center'>Conta Bancária</h1>";
echo "<hr>";

echo "<br>";

echo "Titular da conta: $conta1->titular <br>";
echo "N° da conta: $conta1->numero <br>";
echo "Saldo: R$". number_format($conta1->saldo, 2, ",", '.'). " <br>";
echo "Tipo da conta: $conta1->tipo <br>";

echo "<br><br>";

echo "<hr>";

echo "Titular da conta: $conta2->titular <br>";
echo "N° da conta: $conta2->numero <br>";
echo "Saldo: R$". number_format($conta2->saldo, 2, ",", '.'). " <br>";
echo "Tipo da conta: $conta2->tipo <br>";

echo "<br><br>";

echo "<hr>";

echo "Conta 1<br>";
$conta1->sacar(130);
$conta1->sacar(120.50);
$conta1->consultarSaldo();
$conta1->sacar(1);
$conta1->depositar(1000);
$conta1->consultarSaldo();

echo "Conta 2<br>";
$conta2->sacar(125);
$conta2->sacar(120.50);
$conta2->consultarSaldo();
$conta2->sacar(1);
$conta2->depositar(10000);
$conta2->consultarSaldo();


?>
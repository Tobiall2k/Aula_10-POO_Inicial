<?php

class Pedido{
    public int $numero;
    public string $cliente;
    public float $valor;
    public string $status;

    public function adicionarItem($valor){
        $this->valor += $valor;
    }

    public function cancelar(){
        echo "Pedido Cancelado. Até a próxima!<br>";
        $this->status = "Cancelado";
    }

    public function finalizar(){
        echo "Parabéns. Seu pedido foi finalizado!<br>";
        $this->status = "Finalizado";
    }

    public function exibirResumo(){
        echo "Número Pedido: " .$this->numero. "<br>";
        echo "Cliente: " .$this->cliente. "<br>";
        echo "Valor: R$" .number_format($this->valor,2,",","."). "<br>";
        echo "Status: " .$this->status. "<br>";
        echo "<br>";
    }
}

$pedido = new Pedido();
$pedido-> numero = 1;
$pedido-> cliente = "Tobias";
$pedido-> valor = 20;
$pedido-> status = "Aguardando";
$pedido->exibirResumo();
$pedido->adicionarItem(40);
$pedido->exibirResumo();
$pedido->finalizar();
$pedido->exibirResumo();

echo "<hr>";
echo "<br>";

$pedido = new Pedido();
$pedido-> numero = 2;
$pedido-> cliente = "Maria";
$pedido-> valor = 10;
$pedido-> status = "Aguardando";
$pedido->exibirResumo();
$pedido->adicionarItem(20);
$pedido->exibirResumo();
$pedido->cancelar();
$pedido->exibirResumo();




?>
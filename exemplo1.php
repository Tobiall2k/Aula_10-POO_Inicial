<?php

// Criação de classe no PHP
class Carro{
    // Atributos
    public string $modelo;
    public string $cor;
    public string $marca;
    public float $velocidade;
    public bool $temTetoSolar;

    // Metódos
    public function ligar(){
        echo "Carro ligou...<br>";
    }

    public function acelerar($velocidadeCarro){
        $this->velocidade = $this->velocidade + $velocidadeCarro;
        echo "O carro acelerou...<br>";
        echo "Velocidade do carro :". $this->velocidade . "Km/h<br>";

    }

    public function frear($frearCarro){
        $this->velocidade = $this->velocidade - $frearCarro;

        if ($this->velocidade < 0) {
            $this->velocidade = 0;
        }

        echo "O carro freou<br>";
        echo "Velocidade do carro: ". $this->velocidade . "Km/h <br>";
    }

    public function desligar(){
        while($this->velocidade > 0) {
            $this->frear(10);
        }
        echo "O carro foi desligado.";
    }
}

// Criação de objeto da classe Carro
$carro1 = new Carro();

// Colocando valores no objeto carro1
$carro1->modelo = 'Astra';
$carro1->cor = 'Preto';
$carro1->marca = 'Chevrolet';
$carro1->velocidade = 0;
$carro1->temTetoSolar = FALSE;

// Printar o valor do objeto carro1
// var_dump($carro1);

// Criando objeto carro2
$carro2 = new Carro();

// Colocando atributos no objeto carro2
$carro2->modelo = 'Chevette';
$carro2->cor = 'Roxo';
$carro2->marca = 'Chevrolet';
$carro2->velocidade = 0;
$carro2->temTetoSolar = TRUE;

echo "<br>";

// Printar o valor do objeto carro2
// var_dump($carro2);

// Exibindo atributos de forma visual
echo "<p>Modelo carro 1: ". $carro1->modelo . "</p>";
echo "<p>Cor do carro 1: ". $carro1->cor . "</p>";
echo "<p>Marca do carro 1: ". $carro1->marca . "</p>";
echo "<p>Velocidade do carro 1: ". $carro1->velocidade . " Km/h</p>";
echo "<p>Tem teto solar: ". ($carro1->temTetoSolar ? 'Tem teto solar' : 'Não tem teto solar') . "</p>";
$carro1->ligar();
// Chamando método de acelerar o objeto carro 1
$carro1->acelerar(50);
$carro1->acelerar(100);
$carro1->frear(50);
$carro1->desligar();

echo "<hr>";

// Exibindo informações do carro 2
echo "<p>Modelo carro 2: ". $carro2->modelo . "</p>";
echo "<p>Cor do carro 2: ". $carro2->cor . "</p>";
echo "<p>Marca do carro 2: ". $carro2->marca . "</p>";
echo "<p>Velocidade do carro 2: ". $carro2->velocidade . " Km/h</p>";
echo "<p>Tem teto solar: ". ($carro2->temTetoSolar ? 'Tem teto solar' : '   Não tem teto solar') . "</p>";
$carro2->ligar();
$carro2->acelerar(80);
$carro2->acelerar(80);
$carro2->frear(50);


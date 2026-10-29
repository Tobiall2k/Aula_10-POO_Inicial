<?php

class Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $ligado;


    public function ligar(){
        if ($this->bateria <= 0){
            echo "0% <br>";
            $this->ligado = FALSE;
        } else {
            echo "Ligando celular... <br>";
            $this->ligado = TRUE;
        }

    }

    public function desligar(){
        echo "Desligando... <br>";
        $this->ligado = FALSE;
    }

    public function user($consumo){
        if ($this->bateria <= 0){
            $this->bateria = 0;
            echo "Não é possível usar o celular pois está descarregado! <br>";
        } else {
            $this->bateria -= $consumo;
            echo "Sua bateria após o consumo é: $this->bateria%<br>";
        }

    }

    public function carregar($carga){
        if ($this->bateria >= 100){
            echo "100% <br>";
        } elseif ($this->bateria + $carga > 100) {
            $this->bateria = 100;
            echo "O valor da sua bateria após a carga é de: $this->bateria%<br>";
        } else{
            $this->bateria += $carga;
             echo "O valor da sua bateria após a carga é de: $this->bateria%<br>";
        }
    }
};

$celular1 = new Celular();
$celular1-> marca = 'Apple';
$celular1-> modelo = 'Iphone 18';
$celular1-> cor = 'Laranja';
$celular1-> bateria = 0;
$celular1 -> ligado = FALSE;
echo "<h1 style='text-align:center'>Celulares</h1>";
echo "Marca: ". $celular1->marca. "<br>";
echo "Modelo: ". $celular1->modelo ."<br>";
echo "Cor: ". $celular1->cor ."<br>";
echo "Bateria:".  $celular1->bateria ."%<br>";
echo "Estado: ". $celular1->ligado ? "Ligado" : "Desligado"."";
echo "<br>";
echo "<hr>";
$celular1->ligar();
$celular1->user(10);
$celular1->carregar(100);
$celular1->desligar();
$celular1->ligar();

$celular2 = new Celular();
$celular2-> marca = 'Samsung';
$celular2-> modelo = 'A37';
$celular2-> cor = 'Preto';
$celular2-> bateria = 0;
$celular2 -> ligado = FALSE;
echo "<br>";
echo "<hr>";
echo "<br>";
echo "Marca: ". $celular2->marca. "<br>";
echo "Modelo: ". $celular2->modelo ."<br>";
echo "Cor: ". $celular2->cor ."<br>";
echo "Bateria:".  $celular2->bateria ."%<br>";
echo "Estado: ". $celular2->ligado ? "Ligado" : "Desligado"."";
echo "<br>";
echo "<hr>";
$celular2->ligar();
$celular2->user(20);
$celular2->carregar(90);
$celular2->desligar();
$celular2->ligar();




?>
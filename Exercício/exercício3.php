<?php

class Aula{
    public string $disciplina;
    public string $professor;
    public int $duracao;
    public int $nSala;
    public string $bloco;

    public function exibirInformações(){
        echo "Disciplina: " .$this->disciplina. "<br>";
        echo "Professor: " .$this->professor. "<br>";
        echo "Duração: " .$this->duracao. " min<br>";
        echo "Número da Sala: " .$this->nSala. "<br>";
        echo "Bloco: " .$this->bloco. "<br>";
        echo "<br>";
    }

    public function trocarProfessor($professor){
        $this->professor = $professor;
    }

    public function alterarLocal($nSala,$bloco){
        $this->nSala = $nSala;
        $this->bloco = $bloco;
    }
}

$aula = new Aula();
$aula-> disciplina = "POO";
$aula-> professor = "Samuel";
$aula-> duracao = 100;
$aula-> nSala = 12;
$aula-> bloco = "Anexo";
$aula->exibirInformações();
$aula->trocarProfessor("Luiz");
$aula->exibirInformações();
$aula->alterarLocal(10, "Bloco 1");
$aula->exibirInformações();

echo "<hr>";
echo "<br>";

$aula = new Aula();
$aula-> disciplina = "LIMA";
$aula-> professor = "Samuel";
$aula-> duracao = 100;
$aula-> nSala = 12;
$aula-> bloco = "Bloco 2";
$aula->exibirInformações();
$aula->trocarProfessor("Gabriel");
$aula->exibirInformações();
$aula->alterarLocal(5, "Anexo");
$aula->exibirInformações();



?>
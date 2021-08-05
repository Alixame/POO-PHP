<?php //<-Iniciando TAG PHP

class Pessoa { //<--Iniciando a Classe

    //nivel de proteção
    public $nome = "Lucas Alixame"; // <- visivel dentro e fora da classe
    protected $idade = 18; // <-visivel apenas dentro da classe (possivel herdar em outras classes)
    private $senha = "123456"; // <-visivel apenas dentro da classe (não é possivel herdar em outras classes)

    // Criando um metodo para acessar os valores
    public function acessarDados(){

        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";

    }
}

$objeto = new Pessoa();


<?php //<-Iniciando TAG PHP

 class Pessoa { //<--Iniciando a Classe

    //Criando um atributo para a classe
    //OBS:Atributos publicos pode ser enchergado fora da classe
    public $nome;

    //Criando um metodo
    public function falar(){

        //Metodo falar retorna uma string
        //OBS: Utilizamos o '$this->' sempre que precisamos infromar um atributo dentro da classe
        return "Olá o meu nome é ".$this->nome.", Muito Prazer!"; 

    }
 }

// Criando uma INSTANCIA da classe Pessoa
$lucas = new Pessoa();

// A instancia pessoa recebe no seu atributo 'nome' um valor
$lucas->nome  = "Lucas Alixame";

// Utilizando um metodo da classe Pessoa
// OBS: Como a classe retorna uma string apenas, para mostrar ao usuario devemos utilizar o 'echo'
echo $lucas->falar();


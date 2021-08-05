<?php //<-Iniciando TAG PHP

class Carro { //<--Iniciando a Classe

    //Criando variaveis  privadas (variaveis que so podem ser acessadas a partir da classe que estão)
    private $modelo;
    private $motor;
    private $ano;

    //Ciando função publica GET(Pega o valor) da variavel $modelo 
    public function getModelo(){

        return $this->modelo;

    }

    //Ciando função publica SET(Atibui o valor) da variavel $modelo
    public function setModelo($modelo){

        $this->modelo = $modelo;

    }


    //Ciando função publica GET(Pega o valor) da variavel $motor
    public function getMotor(){

        return $this->motor;

    }

    //Ciando função publica SET(Atibui o valor) da variavel $motor
    public function setMotor($motor){

        $this->motor = $motor;

    }


    //Ciando função publica GET(Pega o valor) da variavel $ano
    public function getAno(){

        return $this->ano;

    }

    //Ciando função publica SET(Atibui o valor) da variavel $ano
    public function setAno($ano){

        $this->ano = $ano;

    }

    // Criando função publica que retorna um array pegando os valores das variaveis $modelo,$motor,$ano
    // OBS: Já que as variaveis são privadas unica forma de acessar é utilizando uma função publica dentro da mesma classe
    public function exibir(){

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}

//Instanciando um novo Objeto da Classe Carro
$gol = new Carro();

//Atribui o 'Modelo' do Objeto "gol"
$gol->setModelo("Gol Bola");

//Atribui o 'Motor' do Objeto "gol"
$gol->setMotor("1.0");

//Atribui o 'Ano' do Objeto "gol"
$gol->setAno("2021");

// Mostrando na tela o objeto $gol
// OBS: var_dump é usado como comando de saida para ver os tipos das variaveis e seus valores
var_dump($gol);

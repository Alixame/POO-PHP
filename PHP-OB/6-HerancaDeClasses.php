<?php

class Documento {

    //Criando variavel/atributo privado
    private $numero;

    //Ciando função publica GET(Pega o valor) da variavel $numero 
    public function getNumero(){

        return $this->numero;

    }

    //Ciando função publica SET(Atibui o valor) da variavel $numero
    public function setNumero($numero){

        $this->numero = $numero;

    }

}

class CPF extends Documento { // <- Criando classe 'CPF' que herda atributos da classe 'Documento'

    // OBS: Note-se que não declaramos nenhuma variavel nessa classe, podemos usar direto da classe herdada

    // Criando função para validar cpf setando um retorno padrão (bool = True ou False)
    public function validar():bool {

        //Validação do CPF
        $numero = $this->numero;

        //Retorna se a validação deu certo
        return true;

    }

}


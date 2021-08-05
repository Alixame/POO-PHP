<?php //<-Iniciando TAG PHP

class Documento { //<--Iniciando a Classe Documento

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

//Instanciando um novo Objeto da Classe CPF que herda atributos da classe Documento
$cpf = new CPF();

//Atribui o 'Numero' do Objeto "cpf"
$cpf->setNumero('46153637885');

//Mostrando na tela o retorno da validação
var_dump($cpf->validar());

echo "<br>";

//Mostrando na tela o valor do atributo 'numero' do objeto 'cpf'
var_dump($cpf->getNumero('46153637885'));



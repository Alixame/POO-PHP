<?php //<-Iniciando TAG PHP

class Endereco { //<--Iniciando a Classe 

    //Criando variaveis  privadas (variaveis que so podem ser acessadas a partir da classe que estão)
    private $logradoro;
    private $numero;
    private $cidade;

    // Função responsavel por contruir um objeto
    // OBS: Metodo executado automaticamente quando usamos a função 'new', quando instanciamos um objeto 
    public function __construct($logradoro,$numero,$cidade){
        
        $this->logradoro = $logradoro;
        $this->numero = $numero;
        $this->cidade = $cidade;

    }

    // Função responsavel por destruir/apagar uma variavel
    // OBS: Metodo executado automaticamente quando usamos a função 'unset()'
    public function __destruct(){
        //var_dump("DESTRUIR");   
    }

    // Função responsavel por converter um objeto para string
    public function __toString(){
        
        return $this->logradoro.", ".$this->numero.", ".$this->cidade.".";

    }

}

//Instanciando um novo Objeto da Classe Endereco(Passando por parametro seus valores)
$meuEndereco = new Endereco('Rua Laurindo José Basso','08','Nova Granada');

//var_dump($meuEndereco);

//OBS: o comando 'echo' não retorna objetos nem array
echo $meuEndereco;
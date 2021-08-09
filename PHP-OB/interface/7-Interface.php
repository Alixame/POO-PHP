<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}


/**
 * Declarando a classe assim irá nos retornar um erro já que a interface requer que exista as funções declaradas nela.
 */
class Civic implements Veiculo {


}

/**
 * Declarando a classe assim, colocando todas as funções que a interface exige funcionara perfeitamente!
 */
class Corolla implements Veiculo {

    public function acelerar($velocidade){
        
    }

    public function frenar($velocidade){
        
    }

    public function trocarMarcha($marcha){

    } 
    
}

// Retornara erro de implementação
$civic = new Civic();

// Não retornara erro nenhum já que seguimos a regra da interface
$corolla = new Corolla();


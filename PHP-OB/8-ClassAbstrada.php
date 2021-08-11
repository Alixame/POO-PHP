<?php


/**
 * Note-se que nesse exemplo estamos criando 3 classes
 * 1-classe do tipo Interface que cria um padrão a ser seguido
 * 1-classe abstrata que implementa o padrão da interface
 * 1-classe que extende a classe abstrata conseguindo assim receber suas funções e conseguindo instancia objetos a partir dela
 */




/**
 * Criando uma nova classe do tipo interface (Classe essa que define um padrão para outras classes seguirem)
 */ 
interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

/**
 * Criando uma nova classe do tipo abstrata que implementa a interface (Classe abstrata, outras classes podem herdar suas funções mas não podemos criar novos objetos a partir dela)
 */
abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){
        
    }

    public function frenar($velocidade){
        
    }

    public function trocarMarcha($marcha){

    } 
    
}

/**
 * Classe normal que extende da classe abstrata sendo assim conseguindo herdar suas funções
 * OBS: Note-se que não vamos adicionar nenhuma nova função a essa classe
 */
class Civic extends Automovel{


}

// OBS: Se terntarmos instanciar um novo objeto da classe abstrata não funcionará
$gol = new Automovel();



// Instanciando novo objeto da classe Civic
$carro = new Civic();

// Utilizando uma função da classe abstrada (funciona por estarmos criando uma nova instancia de uma classe que extende a classe abstrata)
$carro->acelerar(100);
Hoje, a maioria das linguagens de programação são orientadas a objetos como PHP,C#,Python, Java, dentre outras... 
Apesar de terem algumas diferenças na implementação, todas seguem os mesmos princípios e conceitos.

Principais conceitos da POO:

1- Classes
As classes são usadas na orientação a objetos para facilitar a criação e reutilização de codigo já que cada classe possui seus metodos e atributos sendo possivel utiliza-los a partir de seus objetos.

2- Classes Abstratas
A grande diferença de Classes Abstratas para as Classes normais é que as Abstratas não instancia objetos, elas apenas servem de modelo e se
extende para outras Classes.

3- Herança de Classes
As Heranças permitem que as classes herdem atributos ou metodos de outras classes chamadas de Classe Pai, sendo assim não precisando escrever novamente as funções.

4- Metodos Magicos
Metodos magicos são um conjunto de funções que ja vem pre-definido na linguagem e sua utilização é automatica, por exemplo, sempre que vamos instanciar um novo objeto chamamos a função construtora da classe, essa é uma função magica que cria o objeto com seus respectivos atributos e metodos.

5- Metodos Estaticos
Metodos estaticos são aqueles possiveis de serem usados mesmo sem instanciar um objeto, ou seja, basta chamar a função diretamente da classe.

6- Encapsulamento
O Encapsulamento é o modo que pegamos um dado e armazenamos de formas que seja mais restrita o acesso
daquele dado, normalmente o encapsulamento se baseia em alguns niveis: Public, Privado, e Protegido,
Publico = O Objeto instanciado pode acessar diretamente.
Privado = O Objeto instanciado não possui permisão direta para acessar o atributo ou metodo, sendo assim outro metodo publico dentro da classe deve fazer essa ponte.

7- Interfaces
As interfaces servem para criarmos padroes ou regras que queremos que outras classes sigam, as classes
que recebem essa interface devem conter todas os metodos e parametros que a interface possui, claro que podemos adicionar
novos metodos nas classes, mas sempre que uma classe tiver como implemento a interface, deve-se seguir a regra da interface.

8- Polimorfismo
O Polimorfismo é quando sobrescrevemos funções que mude dependendo de seus objetos, mas pertencem a mesma Classe.
O melhor exemplo para se entender isso é os animais, todos  São Animais(mesma classe), mas existe especies diferente e que fazem funções diferentes.

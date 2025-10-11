<?php
// Exemplo simples de Programação Orientada a Objetos
/**A POO organiza o código em classes (modelos) e objetos (instâncias).
O objetivo é representar o mundo real com atributos (características) e métodos (ações). */
class Pessoa {
    public $nome;
    public $idade;

    // Construtor: inicializa os atributos
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método que exibe uma mensagem
    public function apresentar() {
        echo "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos.<br>";
    }
}

// Criação de um objeto (instância da classe)
$p1 = new Pessoa("Ana", 25);
$p1->apresentar();

//echo $p1->idade;

/**
 * Classe: é o molde que define estrutura e comportamento.
 * Objeto: é uma instância dessa classe, com dados próprios.
 */
class Carro {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes() {
        echo "Carro: {$this->marca} {$this->modelo}<br>";
    }
}

// Criando dois objetos diferentes
$carro1 = new Carro("Toyota", "Corolla");
$carro2 = new Carro("Ford", "Mustang");

$carro1->exibirInformacoes(); // chamada do metodo
$carro2->exibirInformacoes();
echo $carro1->modelo;

/**
 * A herança permite que uma classe (filha) reutilize atributos e métodos de outra classe (pai), 
 * facilitando a extensão e o reaproveitamento de código.
 * 
 */
// Classe base (pai)
class Animal {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function falar() {
        echo "O animal faz um som.<br>";
    }
}

// Classe derivada (filha)
class Cachorro extends Animal {
    public function falar() {
        echo "{$this->nome} diz: Au au!<br>";
    }
}

class Gato extends Animal {
    public function falar() {
        echo "{$this->nome} diz: Miau!<br>";
    }
}

// Criando objetos das classes filhas
$dog = new Cachorro("Rex");
$cat = new Gato("Mimi");

$dog->falar();
$cat->falar();
// ** Note que as classes filhas sobrescrevem o método falar() — isso é polimorfismo.


//*********** Encapsulamento e Visibilidade **************/
// O encapsulamento protege os dados da classe, controlando o acesso externo:
//
// public → acessível por todos.
//
// protected → acessível apenas na classe e nas classes filhas.
//
// private → acessível apenas dentro da própria classe.
/***********************************************************/
class ContaBancaria {
    public $titular;        // Público
    private $saldo;         // Privado

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente.<br>";
        }
    }

    public function verSaldo() {
        echo "Saldo atual: R$ {$this->saldo}<br>";
    }
}

$conta = new ContaBancaria("João", 1000);
$conta->depositar(500);
$conta->verSaldo();

// Tentativa de acesso direto ao atributo privado (gera erro)
 //echo $conta->saldo;
 // O atributo $saldo é privado, logo, não pode ser acessado diretamente fora da classe.

 /********************** propriedade static ********************************
 * Método estático (static): pode ser chamado sem criar um objeto.
 *
 * Propriedade estática: é compartilhada entre todas as instâncias da classe.
 ***************************************************************************/

class Matematica {
    public static $pi = 3.14159; // Propriedade estática

    // Método estático: pode ser chamado sem instanciar
    public static function somar($a, $b) {
        return $a + $b;
    }

    public static function areaCirculo($raio) {
        return self::$pi * ($raio ** 2);
    }
}

// Chamando métodos e atributos estáticos
echo "Soma: " . Matematica::somar(5, 3) . "<br>";
echo "Área do círculo: " . Matematica::areaCirculo(4) . "<br>";

?>

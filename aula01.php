<?php
    /** AULA 01 - PHP */
    /** Diego Paiani Cardoso */
    
    /* um comentario de varias linhas pode ser feito assim */
    // um comentario de uma linha pode ser feito assim
    
    /**********************************
     * TIPOS DE DADOS:
     * String - texto
     * Integer - números inteiros
     * Float - números decimais 
     * Boolean - true ou false   
     **********************************/
    /* variaveis em PHP começam com $ */
    $numero = 10;           // integer
    $texto = "Olá, mundo!"; // string
    $decimal = 10.5;        // float
    $verdadeiro = true;     // boolean
    /***************************************/
    /* para exibir algo na tela usamos echo */
    echo "Olá, mundo!";

    echo "<hr>"; // quebra de linha em HTML

    /***************************************/
    /* OPERADORES DE ARTIMÉTICOS           */
    /***************************************/
    //  Operador |	Nome	  |    Exemplo	  | Resultado de $a = 10 e $b = 5
    //     +	   Adição	       $a + $b	       15
    //     -	   Subtração	   $a - $b	       5
    //     *	   Multiplicação   $a * $b	       50
    //     /	   Divisão	       $a / $b	       2
    //     %	   Módulo	       $a % $b	       0 (resto da divisão de 10 por 5)
    //     **	   Exponenciação   $a ** $b	       100000 (10 elevado a 5) 
    /***************************************/
    /* OPERADORES DE ATRIBUIÇÃO            */
    /***************************************/
    $a = 10;        // atribuição simples
    $b = 5;
    $a += $b;       // equivalente a $a = $a + $b
    echo $a;        // exibe 15
    echo "<hr>";
    $a -= $b;       // equivalente a $a = $a - $b
    echo $a;        // exibe 10
    echo "<hr>";
    $a *= $b;       // equivalente a $a = $a * $b
    echo $a;        // exibe 50
    echo "<hr>";
    $a /= $b;       // equivalente a $a = $a / $b
    echo $a;        // exibe 10
    echo "<hr>";    
    $a %= $b;       // equivalente a $a = $a % $b
    echo $a;        // exibe 0
    echo "<hr>";
    /***************************************/
    /* OPERADORES DE COMPARAÇÃO            */
    /***************************************/
    //  Operador |	Nome	          |    Exemplo	  | Resultado de $a = 10 e $b = 5
    //     ==	   Igualdade	        $a == $b	       false
    //     ===	   Idêntico	            $a === $b	       false (verifica valor e tipo)
    //     !=	   Diferença	        $a != $b	       true
    //     <>	   Diferença	        $a <> $b	       true
    //     !==	   Não identidade	    $a !== $b	       true (verifica valor e tipo)
    //     >	   Maior que	        $a > $b	           true
    //     <	   Menor que	        $a < $b	           false
    //     >=	   Maior ou igual	    $a >= $b	       true
    //     <=	   Menor ou igual	    $a <= $b	       false
    /***************************************/
    /* OPERADORES DE LÓGICOS               */
    /***************************************/
    //  Operador |	Nome	          |    Exemplo	   | Resultado de $a = true e $b = false
    //     &&	   E (AND)	            $a && $b	       false (true se ambos forem true)
    //     ||	   OU (OR)	            $a || $b           true (true se um for true)
    //     !	   NÃO (NOT)	        !$a	               false (inverte o valor)
    /***************************************/
    /* OPERADORES DE INCREMENTO E DECREMENTO*/
    /***************************************/
    $a = 10;
    echo --$a; // pré-decremento: decrementa $a e depois retorna o valor
    echo "<hr>";
    $a = 10;
    echo $a--; // pós-decremento: retorna o valor de $a e depois decrementa
    echo "<hr>";   
    $a = 10;
    echo ++$a; // pré-incremento: incrementa $a e depois retorna o valor
    echo "<hr>";
    $a = 10;
    echo $a++; // pós-incremento: retorna o valor de $a e depois incrementa
    echo "<hr>";    
    /***************************************/
    /** ESTRUTURAS DE CONDIÇÃO */
    /***************************************/
    $idade = 20;
    if($idade >= 18) {
        echo "Você é maior de idade.<hr>";
    } else {
        echo "Você é menor de idade.<hr>";
    }
    $Nota = 8;
    if($Nota >= 7) {
        echo "Aprovado<hr>";
    } elseif($nota >= 5 && $nota < 7) {
        echo "Recuperação<hr>";
    } else {
        echo "Reprovado<hr>";
    }
    // switch
    $dia = "segunda";
    switch ($dia) {
        case "segunda":
            echo "Hoje é segunda-feira<hr>";
            break;
        case "terça":
            echo "Hoje é terça-feira<hr>";
            break;
        default:
            echo "Outro dia<hr>";
    }
    
    /***************************************/
    /** ESTRUTURAS DE REPETIÇÃO */
    /***************************************/
    // while enquanto uma condição for verdadeira
    $i = 1;
    while ($i <= 5) {
        echo "while - Valor de i: $i<hr>";
        $i++;
    }
    // do while repete o bloco pelo menos uma vez
    // do...while
    $j = 1;
    do {
        echo "do - while - Valor de j: $j<hr>";
        $j++;
    } while ($j <= 5);
    // for
    // inicialização; condição; incremento
    for ($k = 1; $k <= 5; $k++) {
        echo "for - Valor de k: $k<hr>";
    }
    // foreach (usado para arrays)
    /** um array é uma estrutura da dados capaz de armazenar valores de diferentes tipos
     * em uma única variável esses valores são identificados por um indice */
     
    $nomes = ["Ana", "Bruno", "Carlos"];
    foreach ($nomes as $nome) {
        echo "Nome: $nome<hr>";
    }
    $numeros = [10, 15, 25];
    for ($i = 0; $i < count($numeros); $i++) {
        echo "Numeros: " . $numeros[$i] . "<hr>";
    }
    /** a função count() retorna o numeros de itens do array
     *  o ponto concatena as strings
     */
    /***************************************/
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        echo "Olá, $nome!";
    }
    /************************************/
    /** verificação de tipos e casting */
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    /********************************/
    var_dump($a);   /** verificando o tipo de uma variável */
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    /********************************/
    /** convertendo o tipo de uma variável */
    $a = (string) $a;  
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;
    /********************************/
    /** verificando o tipo de uma variável */
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    echo "<hr>";
    /********************************/
    /** definindo variaveis constantes no php
      * constante é um valor que não pode ser alterado durante a execução do script */
    define("PI", 3.14);
    echo PI; // exibe 3.14
    echo "<hr>";
    // Ou usando const (a partir do PHP 5.3)
    const NOME = "GitHub";
    echo NOME; // exibe GitHub
    echo "<hr>";
    /*******************************
     * Funções em PHP
     * Uma função é um bloco de código que pode ser reutilizado várias vezes
     * durante a execução do script.
     * As funções podem receber parâmetros e retornar valores.
     *******************************/
    function saudacao($nome) {
        return "Olá, $nome!";
    }
    echo saudacao("Maria");
    echo "<hr>";
    /*******************************/
    function soma($a, $b) {
        return $a + $b;
    }
    echo soma(5, 10);
    echo "<hr>";
    /********************************/
    // Função anônima (closure)
    $multiplicacao = function($a, $b) {
        return $a * $b;
    };
    echo $multiplicacao(5, 10);
    echo "<hr>";
    /********************************/
    // Função nativa do PHP
    $texto = "Olá, mundo!";
    echo strlen($texto); // exibe 12 (número de caracteres)
    echo "<hr>";
    /*********************************/
    /** Usando arrays */
    // Array indexado
    $frutas = ["maçã", "banana", "laranja"];
    echo $frutas[0]; // exibe maçã
    echo "<hr>";
    // Array associativo
    $pessoa = [
        "nome" => "João",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];
    echo $pessoa["nome"]; // exibe João
    echo "<hr>";
    // Adicionando elementos a um array
    $frutas[] = "uva";
    print_r($frutas); // exibe Array ( [0] => maçã [1] => banana [2] => laranja [3] => uva )
    echo "<hr>";
    // Removendo elementos de um array
    unset($frutas[1]); // remove banana
    print_r($frutas); // exibe Array ( [0] => maçã [2] => laranja [3] => uva )
    echo "<hr>";
    // Funções úteis para arrays
    echo count($frutas); // exibe 3 (número de elementos)
    echo "<hr>";
    sort($frutas); // ordena o array em ordem alfabética
    print_r($frutas); // exibe Array ( [0] => laranja [1] => maçã [2] => uva )
    echo "<hr>";
    rsort($frutas); // ordena o array em ordem alfabética reversa
    print_r($frutas); // exibe Array ( [0] => uva [1] => maçã [2] => laranja )
    echo "<hr>";
    // Verificando se uma variável está definida
    if (isset($pessoa["idade"])) {
        echo "Idade: " . $pessoa["idade"];
    } else {
        echo "Idade não definida";
    }
    echo "<hr>";
    // Verificando se uma variável é nula
    $var = NULL;
    if (is_null($var)) {    
        echo "A variável é nula";
    } else {
        echo "A variável não é nula";
    }
    echo "<hr>";
    $cars = [["Gol", "Fiat", "Ford",],
        ["Peugeot", "Citroen", "Renault"],
        ["Honda", "Toyota", "Nissan"], 
        ["Hyundai", "Kia", "BMW"]];

        /********************************************************
        *  outra forma de declarar um array multidimensional
        * $cars = array (
        *          array("Volvo",22,18),
        *          array("BMW",15,13),
        *          array("Saab",5,2),
        *          array("Land Rover",17,15)
        *     );
        *********************************************************/

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
    echo "</ul>";
    echo "<hr>";
    /**
    *   Aqui estão algumas das principais funções de array em PHP:
    *
    *   count($array) — Conta o número de elementos do array.
    *   array_push($array, $valor) — Adiciona um ou mais elementos no final do array.
    *    array_pop($array) — Remove o último elemento do array.
    *    array_shift($array) — Remove o primeiro elemento do array.
    *    array_unshift($array, $valor) — Adiciona um ou mais elementos no início do array.
    *    in_array($valor, $array) — Verifica se um valor existe no array.
    *    rray_search($valor, $array) — Procura um valor e retorna o índice correspondente.
    *    sort($array) — Ordena o array em ordem crescente.
    *    rsort($array) — Ordena o array em ordem decrescente.
    *    array_merge($array1, $array2) — Junta dois ou mais arrays.
    *    array_keys($array) — Retorna todas as chaves do array.
    *    array_values($array) — Retorna todos os valores do array.
    *    array_slice($array, $inicio, $comprimento) — Retorna uma parte do array.
    *    array_reverse($array) — Inverte a ordem dos elementos do array.
    *    array_map($callback, $array) — Aplica uma função em todos os elementos do array.
    *    array_filter($array, $callback) — Filtra os elementos do array usando uma função de callback.
    *    array_reduce($array, $callback, $valor_inicial) — Reduz o array a um único valor usando uma função de callback.
     */
}
?>  
<!-- Exemplo de formulário HTML -->
<form method="post">
    Digite seu nome: <input type="text" name="nome">
    <input type="submit" value="Enviar">
</form>


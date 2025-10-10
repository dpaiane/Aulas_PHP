<?php
/******************************************************
 * Definindo constantes
 * 
*********************************************************/
define("PI", 3.14);
const NOME = "GitHub";
echo NOME;
echo "<br>";
echo PI;
/*********************************************
 *  Verificando o tipo da variavel
 ********************************************/
$x = 5.3;        // float ou double
$y = 10;         // intereger
$M = "mensagem";  // string
echo "<br>";
echo var_dump($x);
echo "<br>";
echo gettype($x);
echo "<br>";
echo var_dump($y);
echo "<br>";
echo gettype($y);
echo "<br>";
echo var_dump($M);
echo "<br>";
echo gettype($M);
echo "<br>";
echo strlen($M);
/************************************************
 * Arrays em php
 * um array é uma coleção de valores armazenados
 * em uma única variável
 ************************************************/
// array indexado
$frutas = ["maça","banana","laranja"];
echo "<br>" . $frutas[0];
echo "<br>" . $frutas[1];
// array associativo
$pessoa = [
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo"
];
echo "<br>" .  $pessoa["nome"];

// adicionando um elemento ao array
$frutas[] = "uva";

// imprimindo o array completo
print_r ($frutas);

// removendo um elemento
unset($frutas[1]);
echo "<hr>";
print_r($frutas);

// funções uteis
echo "<hr>";
echo count($frutas);

// ordena em ordem alfabética
echo "<br>";
sort($frutas);
print_r($frutas);

// ordena em ordem alfabética reversa
echo "<br>";
rsort($frutas);
print_r($frutas);

// verifica se uma variável foi definida
echo "<hr>";
if(isset($pessoa["idade"])){
    echo "Idade:" . $pessoa["idade"];
}
else{
    echo "Idade não definida";
}
// verificando se uma variável é nulla
echo "<hr>";
$var = null;
if(is_null($var)){
    echo "A variável é nula";
}
else{
    echo "A variável não é nula";
}
echo "<hr>";
$cars = [["Gol","Fiat","Ford"],
        ["Peugeot", "Citroen", "Renault"],
        ["Honda", "Toyota", "Nissan"],
        ["Hyunday", "Kia", "BMW"]];
print_r($cars);
echo "<hr>";

$motos = array(
        array("Volvo","Royal","Suzuki"),
        array("Kasisnki","Yamaha","Honda"),
        array("Kawashaky", "thiumph", "Harley")
);
print_r($motos);
echo "<hr>";

/********* criar listas *************/
for($row = 0 ; $row < 3 ; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col = 0 ; $col < 3 ; $col++){
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
/************ Formulários *****************/
$nome = $_POST["name"];
// $nome = htmlspecialchars($_POST["name"]);
echo "<hr>";
echo $nome;
?>
<form action="aula02.php" method="post">
    Digite seu nome: <input type="text" name="name">
    <input type="submit" value="Enviar">
</form>

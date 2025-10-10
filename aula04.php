<?php
/* PROFESSOR DIEGO */
/** metodos de arrays **/

// **** concatenação *****
$nome = "Maria";
$sobrenome = "Silva";
$idade = 30;

// Concatenação usando o ponto (.)
$nome_completo = $nome . " " . $sobrenome;
echo "Nome Completo: " . $nome_completo . "<br>";
// Saída: Nome Completo: Maria Silva

// Concatenação de string com número
echo "Idade: " . $idade . " anos.<br>";
// Saída: Idade: 30 anos.

// **** interpolação *****
$fruta = "Maçã";

// Aspas duplas: interpretam (avaliam) variáveis.
$mensagem_duplas = "Eu gosto de comer uma $fruta por dia.";
echo "Duplas: " . $mensagem_duplas . "<br>";
// Saída: Duplas: Eu gosto de comer uma Maçã por dia.

// Aspas simples: tratam o conteúdo literalmente, sem interpretar variáveis.
$mensagem_simples = 'Eu gosto de comer uma $fruta por dia.';
echo "Simples: " . $mensagem_simples . "<br>";
// Saída: Simples: Eu gosto de comer uma $fruta por dia.

// ***** Função uteis *****
$texto = "Olá mundo!";
$tamanho = strlen($texto); // strlen - retorna o tamanho

echo "O texto é: " . $texto . "<br>";
// Saída: O texto é: Olá mundo!

echo "Seu tamanho é: " . $tamanho . " caracteres.<br>";
// Saída: Seu tamanho é: 10 caracteres. (Espaços e exclamação são contados)

// ******* substituir partes da string *******
$original = "Eu amo programar em Python.";
$substituicao = "PHP";

// str_replace(o que procurar, o que colocar, onde procurar)
$novo_texto = str_replace("Python", $substituicao, $original);

echo "Texto Original: " . $original . "<br>";
// Saída: Texto Original: Eu amo programar em Python.

echo "Texto Modificado: " . $novo_texto . "<br>";
// Saída: Texto Modificado: Eu amo programar em PHP.

//******* encontrar a posição da primeira ocorrencia ********/
$frase = "A casa é azul e a porta é azul.";
$busca = "porta";

// strpos(onde procurar, o que procurar)
$posicao = strpos($frase, $busca);

if ($posicao !== false) {
    echo "A palavra '" . $busca . "' foi encontrada na posição: " . $posicao . "<br>";
    // Saída: A palavra 'porta' foi encontrada na posição: 16
} else {
    echo "A palavra não foi encontrada.<br>";
}

// Exemplo com palavra que não existe
$busca_errada = "verde";
$posicao_errada = strpos($frase, $busca_errada);
if ($posicao_errada === false) {
    // Saída: A palavra 'verde' não foi encontrada.
    echo "A palavra '" . $busca_errada . "' não foi encontrada.<br>";
}
/* Extrair Substrings - Retorna uma parte da string (substring), 
 * dada uma posição inicial e um comprimento opcional. */
$dados = "ABCDE12345FGHIJ";

// Extrair a partir do índice 5 com 5 caracteres de comprimento
$numeros = substr($dados, 5, 5);
echo "Números: " . $numeros . "<br>";
// Saída: Números: 12345

// Extrair a partir do índice 10 até o final
$letras_final = substr($dados, 10);
echo "Final: " . $letras_final . "<br>";
// Saída: Final: FGHIJ

// Usar índice negativo: começa a contar a partir do final
$ultimas_letras = substr($dados, -5);
echo "Últimos 5: " . $ultimas_letras . "<br>";
// Saída: Últimos 5: GHIJ

/***** Converter para Maiúsculas/Minúsculas *******/
$titulo = "Manipulação de Strings em PHP";

// strtolower: Converte para minúsculas
$minusculas = strtolower($titulo);
echo "Minúsculas: " . $minusculas . "<br>";
// Saída: Minúsculas: manipulação de strings em php

// strtoupper: Converte para maiúsculas
$maiusculas = strtoupper($titulo);
echo "Maiúsculas: " . $maiusculas . "<br>";
// Saída: Maiúsculas: MANIPULAÇÃO DE STRINGS EM PHP

// ucfirst: Converte o primeiro caractere para maiúscula
$primeira_maiuscula = ucfirst($minusculas);
echo "Primeira Maiúscula: " . $primeira_maiuscula . "<br>";
// Saída: Primeira Maiúscula: Manipulação de strings em php
?>
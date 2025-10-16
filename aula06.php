<?php
// nome do arquivo
$arquivo = "exemplo.txt";
$conteudo = "olá bem vindo a matrix";

// abre o arquivo para escrita
$handle = fopen($arquivo, "w");
// se o arquivo foi aberto
if($handle){
    // escreve no arquivo
    fwrite($handle, $conteudo);

    // fecha o arquivo
    fclose($handle);

    // mostra uma mensagem para o usuário
    echo "Arquivo criado e escrito com sucesso";
}
else{
    echo "Erro ao criar o arquivo";
}

?>
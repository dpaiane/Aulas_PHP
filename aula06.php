<?php
/****** ESCREVER CONTEUDO EM UM ARQUIVO *******/
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
/****** LER O CONTEUDO DE UM ARQUIVO *******/
$arquivo = "exemplo.txt";
/* verifica se o arquivo existe */
if(file_Exists($arquivo)){
    /* abre o arquivo para leitura */
    $handle = fopen($arquivo, "r");
    /* le todo o conteudo do arquivo */
    #conteudo = fread($handle, filesize($arquivo));
    /* fecha o arquivo */
    fclose($handle);
    /* exibe o conteudo */
    echo nl2br(#conteudo); 
}else{
    echo "O arquivo não existe";
}

/************* LER LINHA A LINHA **************/
$arquivo = ""exemplo.txt";
if(file_exists($arquivo)){
    $handle = fopen($arquivo, "r");

    while(!fopen(handle)){
        $linha = fgets($handle);
        echo nl2br($linha);
    }
    fclose($handle);
}else{
    echo "O arquivo não existe";
}
?>


<!-- MANIPULANDO FORMULÁRIOS -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        .container{
            display:flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Formulário em PHP</h1>
    <div class="container">
        <form action="aula03.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <input type="submit" value="Enviar"> 
        </form>
    </div>
</body>
</html>
<?php
// verificar se o formulario foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // coletar os dados digitados pelo usuário
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    // verifica se tem campo vazio
    if(!empty($nome) && !empty($email)){
        echo "Bem vindo $nome";
        echo "<h2>dados do usuário</h2>";
        echo "Nome:" . $nome . "<br>";
        echo "Email:" . $email . "<br>";
    }
    //elseif()
}
else{
    echo "Erro no envio do formulário";
}
?>

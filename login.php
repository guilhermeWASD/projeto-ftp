<?php
// Arquivo de conexão com o banco de dados
include('conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de e-mail e senha foram preenchidos
    if (!empty($_POST["email"]) && !empty($_POST["senha"])) {
        // Captura os valores enviados pelo formulário
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Insere os dados no banco de dados
        $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

        if ($mysqli->query($sql) === TRUE) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao inserir registro: " . $mysqli->error;
        }
    } else {
        echo "Preencha todos os campos do formulário.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        
        <label>E-mail</label>
        <input type="text" name="email">

        <label>Senha</label>
        <input type="password" name="senha">

        <button type="submit">Entrar</button>
    
    </form>
</body>
</html>
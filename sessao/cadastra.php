<?php
if (!isset($_SESSION))
    session_start();
if (!isset($_SESSION['usuario']))
    die('"Você não está logado. <a href="login.php">Clique aqui</a> para logar"');

if (isset($_POST['email'])) {

    include('conexao.php');

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $mysqli->query("INSERT INTO senhas (email, senha) VALUES('$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastra senha</h1>
    <form action="" method="POST">
        <label for="">Email</label>
        <input type="text" name="email"><br><br>
        <label for="">Senha</label>
        <input type="text" name="senha"><br><br>
        <button type="submit">Cadastrar senha</button>
    </form>
    <a href="logout.php">Sair</a>
</body>

</html>
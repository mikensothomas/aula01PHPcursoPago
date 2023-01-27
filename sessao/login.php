<?php
if (isset($_POST['email'])) {

    include("conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM senhas WHERE email = '$email' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);
    //$sql_code = "SELECT * FROM senhas WHERE senha = '$senha'";

    $usuario = $sql_exec->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        echo "Usuario logado com sucesso!";
    } else {
        echo "Email ou senha inválido!";
    }
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
    <form action="" method="post">
        <h1>Faça seu login na página</h1>
        <label for="">Email</label>
        <input type="text" name="email"><br><br>
        <label for="">Senha</label>
        <input type="text" name="senha"><br><br>
        <button type="submit">Logar</button>
    </form>
</body>

</html>
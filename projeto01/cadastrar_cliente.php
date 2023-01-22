<?php

function limpar_texto($str)
{
    return preg_replace("/[^0-9]/", "", $str);
}

if (count($_POST) > 0) {

    include('conexao.php');

    $erro = false;

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];

    if (empty($nome)) {
        $erro = "Preencha o campo nome";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Preencha o campo email";
    }

    if (!empty($data_nascimento)) {
        $pedacoes = explode('/', $data_nascimento);
        if (count($pedacoes) == 3) {
            $data_nascimento = implode('-', array_reverse($pedacoes));
        } else {
            $erro = "A data deve seguir o padrão dia/mes/ano";
        }
    }

    if (!empty($telefone)) {
        $telefone = limpar_texto($telefone);
        if (strlen($telefone) != 11) {
            $erro = "O telefone deve ser preencido no padrao: (11) 9 8417-7437";
        }
    }

    if ($erro) {
        echo "<p><b>ERRO: $erro</b></p>";
    } else {
        $sql_code = "INSERT INTO clientes(nome, email, telefone, data_nascimento)
        VALUES('$nome', '$email', '$telefone', '$data_nascimento')";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if ($deu_certo) {
            echo "<p><b>cliente cadastrado com sucesso!</b></p>";
            unset($_POST);
        }
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
    <a href="/clientes.phph">volta para a lista</a>
    <form action="" method="POST">
        <p>
            <label>Nome:</label>
            <input value="<?php if (isset($_POST['nome']))  echo $_POST['nome'] ?>" type="text" name="nome">
        </p>
        <p>
            <label>E-mail:</label>
            <input value="<?php if (isset($_POST['email']))  echo $_POST['email'] ?>" type="text" name="email">
        </p>
        <p>
            <label>Telefone:</label>
            <input value="<?php if (isset($_POST['telefone']))  echo $_POST['telefone'] ?>" type="text" name="telefone">
        </p>
        <p>
            <label>Nascimento:</label>
            <input value="<?php if (isset($_POST['data_nascimento']))  echo $_POST['data_nascimento'] ?>" type="text"
                name="data_nascimento">
        </p>
        <p>
            <button type="submit">Salvar cliente</button>
        </p>
    </form>
</body>

</html>
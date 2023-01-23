<?php
include('conexao.php');

$sql_clientes = "SELECT * FROM clientes";
$query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error);
$num_clientes = $query_clientes->num_rows;
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
    <h1>Lista de clientes</h1>
    <p>Estes são os clientes cadastrados no seu sistema</p>
    <table border="1" cellpadding="10">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Nascimento</th>
            <th>Data</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php if ($num_clientes == 0) { ?>
            <tr>
                <td colpan="7">Nenhum cliente foi cadastrado</td>
            </tr>
            <?php } else {
                while ($cliente = $query_clientes->fetch_assoc()) {
                ?>
            <tr>
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $cliente['telefone']; ?></td>
                <td><?php echo $cliente['data_nascimento']; ?></td>
                <td><?php echo $cliente['data_cadastro']; ?></td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Deletar</a>
                </td>
            </tr>
            <?php
                }
            } ?>
        </tbody>
    </table>
</body>

</html>
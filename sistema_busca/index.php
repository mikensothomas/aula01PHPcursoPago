<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de busca</title>
</head>

<body>
    <h1>Lista de vehiculos</h1>
    <form action="" method="$_GET">
        <input type="text" name="busca" placeholder="Digita os tema de pesquisa">
        <button type="submit">Pesquisa</button>
    </form>
    <br>
    <table width="600px" border="1">
        <tr>
            <th>Marca</th>
            <th>Veiculo</th>
            <th>Modelo</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
        ?>
        <tr>
            <td colspan="3">Digite algo para pesquisa</td>
        </tr>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * FROM veiculos 
            WHERE fabricante 
            LIKE '%$pesquisa%' 
            OR modelo LIKE '%$pesquisa%' 
            OR veiculo LIKE '%$pesquisa%'";

            $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar" . $mysqli->error);

            if ($sql_query->num_rows == 0) {
            ?>
        <tr>
            <td colspan="3">Nenhum resultado encontrado....</td>
        </tr>
        <?php
            } else {
                while ($dados = $sql_query->fetch_assoc()) {
                ?>
        <tr>
            <td><?php echo $dados['fabricante']; ?></td>
            <td><?php echo $dados['veiculo']; ?></td>
            <td><?php echo $dados['modelo']; ?></td>
        </tr>
        <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
</body>

</html>
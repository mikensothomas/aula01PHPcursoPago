<?php
if (isset($_POST['nome'])) {
    //echo "<p> Olá <b>  $_POST[nome] </b> seja bem vindo</p>";
    $duraco = time() + (30 * 24 * 60 * 60);
    setcookie("nome", $_POST['nome'], $duraco);
    header("Location: page.php");
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
    <form method="post" action="">
        <p>Qual é teu nome?</p>
        <input type="text" name="nome"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
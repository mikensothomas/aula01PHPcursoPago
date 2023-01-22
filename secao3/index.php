<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
    .erro {
        color: red;
    }
    </style>
</head>

<body>
    <form action="" method="POST">
        <h1>Formulario com PHP</h1>

        <p class="erro">* Obrigatório</p>
        Nome:<input type="text" name="nome"><span class="erro">*</span><br><br>
        E-mail:<input type="email" name="email"><span class="erro">*</span><br><br>
        Website:<input type="url" name="website"><span class="erro">*</span><br><br>
        Comentario:<textarea name="comentario" rows="3" cols="50"></textarea><br><br>
        Genero: <input type="radio" value="masculino" name="genero"> Masculino
        <input type="radio" value="feminino" name="genero"> Feminino
        <input type="radio" value="outro" name="genero"> Outro <br><br>
        <button name="enviar" type="submit">Enviar</button>
        <h1>Dados preenchidos:</h1>

        <?php
        if (isset($_POST['enviar'])) {

            if (empty($_POST['nome']) || strlen($_POST['nome'] < 2)) {
                echo '<p class = "erro">Preencha o campo nome </p>';
                die();
            }

            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo '<p class = "erro">Preencha o campo email </p>';
                die();
            }

            if (empty($_POST['website']) || !filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
                echo '<p class = "erro">Preencha o campo website </p>';
                die();
            }

            $genero = "Não selecionado";

            if (isset($_POST['genero'])) {
                $genero = $_POST['genero'];
            }
            echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
            echo "<p><b>Email: </b>" . $_POST['email'] . "</p>";
            echo "<p><b>Website: </b>" . $_POST['website'] . "</p>";
            echo "<p><b>Comentario: </b>" . $_POST['comentario'] . "</p>";
            echo "<p><b>Genero: </b>" . $genero . "</p>";
        }
        ?>
    </form>
</body>

</html>
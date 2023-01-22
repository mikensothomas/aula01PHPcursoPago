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
        Nome:<input required type="text" name="nome"> <span class="erro">*</span><br><br>
        E-mail:<input required type="email" name="email"> <span class="erro">*</span><br><br>
        Website:<input required type="url" name="website"> <span class="erro">*</span><br><br>
        Comentario:<textarea required name="comentario" rows="3" cols="50"></textarea><br><br>
        Genero: <input required type="radio" value="masculino" name="genero"> Masculino
        <input type="radio" value="feminino" name="genero"> Feminino
        <input type="radio" value="outro" name="genero"> Outro <br><br>
        <button name="enviar" type="submit">Enviar</button>
        <h1>Dados preenchidos:</h1>

        <?php
        if (isset($_POST['enviar'])) {

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
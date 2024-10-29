<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O seu nome</title>
</head>
<body>
    <h1>Digite o seu nome</h1>

    <form action="POST">
        <input type=" text" name="nome" placeholder="Digigite o seu nome" require>
        <button type="submit"> Enviar </button>
    </form>

    <?php
        if (isset ($_POST['nome'])){
            $nome = ['nome'];

            echo "<p> Olá, $nome!</p>";
        }

    ?>
</body>
</html>
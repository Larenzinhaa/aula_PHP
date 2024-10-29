<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de direção</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>
    
    <form method="POST">
        <input type="number" name="idade" required placeholder="Digite sua idade">
        <button type="submit">Verificar</button>
    </form>

    <?php
        if (isset($_POST['idade'])) {
            $idade = $_POST['idade'];

            if ($idade >= 18) {
                echo "<p>Ebaa, você pode dirigir!🚘</p>";
            } else {
                echo "<p>Ops, você não pode dirigir. Espera sua vez! 🚨</p>";
            }
        }
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário HTML</title>
</head>
<body>
    <div class="background">
        <div class="form-container">
            <h2>Formulário de Ingresso</h2>
            <form method= "POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" required>

                <label for="tipo-ingresso">Tipo de Ingresso:</label>
                <select id="tipo-ingresso" name="tipo-ingresso" required>
                    <option value="1">VIP</option>
                    <option value="2">Regular</option>
                    <option value="3">Básico</option>
                </select>

                <button type="submit">Enviar</button>
            </form>
     

<?php
  if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
  }

  if(isset($_POST['tipo-ingresso'])){
    switch($_POST['tipo-ingresso']){
        case 1: $ingresso = "Básico"; $preco = number_format(20,2,",");
        break;
        case 2: $ingresso = "Regular"; $preco = number_format(50,2,",");
        break;
        case 3: $ingresso = "VIP"; $preco = number_format(100,2,",");
        break;

        default: exit;
    }
  }

  if(isset($_POST['idade'])){
    if($_POST['idade'] >= 18){
        echo "<p>Obrigado pela compra em nosso site, $nome!
        <br>INGRESSO PARA COMPRA: $ingresso<br>PREÇO: R$$preco </p>";
    } else{
        echo "<p> Desculpe, infelizmente o show não atende a sua faixa etária. </p>";
    }
  }
?> 
   </div>
   </div> 
</body>
</html>
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <title>Cadastro de Contas</title>
</head>
<body>
    <h1 class="Titulo">Cadastro de Contas</h1>
    <div class="formAccount">
    <form id="formCadastro">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="senha2">Confirmar Senha:</label>
        <input type="password" id="senha2" name="senha2" required><br><br>

        <button type="button" onclick="cadastrar()">Cadastrar</button>
    </form>
</div>

    <script src="JS/cadastro.js"></script>
</body>
</html>
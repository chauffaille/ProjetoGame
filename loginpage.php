<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    // Se não estiver logado, redirecione para a página de login
    header('Location: dashboard.php');
    exit();
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <h2>Login</h2>
    <form id="loginForm" onsubmit="return fazerLogin()" method="post" action="php/login.php">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>

        <button type="submit">Entrar</button>
    </form>

    <script src="JS/login.js"></script>
</body>
</html>
<?php
include 'php/global.php';
include 'php/conexao.php';
session_start(); // Inicia a sessão (necessário apenas uma vez por página)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>


<h1 class="Titulo2">
<?php

$user_id = $_SESSION['loginid'];

// Consultar o banco de dados para obter informações do usuário
$sql = "SELECT * FROM accounts WHERE id = '$user_id'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    $user_name = $user_data['nome'];

    // Exibir mensagem de boas-vindas
    echo "Bem-vindo $user_name!";}
?>
</h1>
<br>
<div class="dashBoardBtns">
  <a class="dashBoardBtn" onclick="loadPage('Highscores.php')">Caçar</a>


</div>

<form action="php/logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
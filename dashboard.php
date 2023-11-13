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
<?php
if (isset($_SESSION['login']) && isset($_SESSION['loginid'])) {
    echo "Status de Login: " . ($_SESSION['login'] ? "Logado" : "Não Logado");
    echo "<br>";
    echo "ID da Conta Logada: " . $_SESSION['loginid'];
} else {
    echo "As variáveis de sessão não estão definidas.";
}
echo "<br>";
echo "<br>";
$user_id = $_SESSION['loginid'];

// Consultar o banco de dados para obter informações do usuário
$sql = "SELECT * FROM accounts WHERE id = '$user_id'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    $user_name = $user_data['nome'];

    // Exibir mensagem de boas-vindas
    echo "Bem-vindo ao, $user_name!";}
?>

<form action="php/logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
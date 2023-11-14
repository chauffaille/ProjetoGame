<?php
include 'conexao.php';
include 'global.php';
session_start(); // Inicia a sessão (necessário apenas uma vez por página)

$email = $_POST['email'];
$senha = $_POST['senha'];

// Verificar se o e-mail está cadastrado
$sql = "SELECT * FROM accounts WHERE email = '$email'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Verificar a senha usando password_verify
    if (password_verify($senha, $row['senha'])) {
        // Adicionar redirecionamento para a página de perfil, dashboard, etc.
        echo "Login bem-sucedido!";
        $_SESSION['login'] = true;
        $_SESSION['loginnow'] = true;
        $_SESSION['loginid'] = $row['id'];
        
        echo "<script>window.location.href = '../index.php';</script>";

        exit(); // Interrompe a execução do PHP após o redirecionamento
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "E-mail não cadastrado.";
}

$conexao->close();
?>

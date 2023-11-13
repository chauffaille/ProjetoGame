<!-- logout.php -->
<?php
session_start();

// Destruir a sessão (logout)
session_destroy();
// Redirecionar para a página de login ou qualquer outra página após o logout
header("Location: ../index.php");
exit();
?>
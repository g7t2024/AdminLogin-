<?php
// Simulação de autenticação no lado do servidor
$expectedUsername = "admin";
$expectedPassword = "root";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $expectedUsername && $password === $expectedPassword) {
    // Login bem-sucedido, redirecionar para a página de dashboard
    header("Location: dashboard.php");
    exit(); // Certifique-se de encerrar o script após o redirecionamento
} else {
    echo "Credenciais inválidas. Tente novamente.";
    // Se você quiser exibir uma mensagem de erro, certifique-se de não ter mais código HTML após isso
}
?>

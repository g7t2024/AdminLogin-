<?php
// Simulação de autenticação no lado do servidor
$expectedUsername = "usuario";
$expectedPassword = "senha";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $expectedUsername && $password === $expectedPassword) {
    // Login bem-sucedido, redirecionar para a página de dashboard
    header("Location: dashboard.php");
    exit(); // Certifique-se de encerrar o script após o redirecionamento
} else {
    echo "Credenciais inválidas. Tente novamente.";
}
?>

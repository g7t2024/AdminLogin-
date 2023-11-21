document.getElementById("loginForm").addEventListener("submit", function (event) {
    event.preventDefault();

    // Simulação de autenticação no lado do servidor
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Substitua esta lógica por autenticação real
    if (username === "usuario" && password === "senha") {
        alert("Login bem-sucedido!");
        // Redirecionar ou realizar outras ações após o login
    } else {
        alert("Credenciais inválidas. Tente novamente.");
    }
});

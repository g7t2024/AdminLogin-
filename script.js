document.getElementById("loginForm").addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Simulação de autenticação no lado do servidor
    if (username === "usuario" && password === "senha") {
        window.location.href = "dashboard.html";
    } else {
        document.getElementById("errorMessage").innerText = "Credenciais inválidas. Tente novamente.";
    }
});

<?php
$host = "localhost";//nome e local do servidor
$user = "root";//usuario padrao banco de dados
$pass = "";
$db = "ln";

$conn = new mysqli("$host", "$user","$pass","$db");
if($conn->connect_errno){//verificar erro
    echo "erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error;//mostrar erro
}

// Informações para consulta
$email = $_POST['email']; // Supondo que o nome seja recebido via POST
$senha = $_POST['senha']; // Supondo que a senha seja recebida via POST

// Consulta SQL
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

// Verifica se há resultados
if ($result->num_rows > 0) {
    // Redireciona para logado.html
    header('Location: /ppdmv/barbearia/index.html');
    exit;
} else {
    // Caso não encontre correspondências, faça algo (ex: exibir uma mensagem de erro)
    echo "Nome de usuário ou senha incorretos.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
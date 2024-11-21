<?php
// Dados de conexão com o MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ln";

// Conexão com o MySQL
$conn = new mysqli($servername, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// SQL para criar o banco de dados
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados '$dbname' criado com sucesso!<br>";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error . "<br>";
}

// Seleciona o banco de dados
$conn->select_db($dbname);

// SQL para criar a tabela
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL
)";

// Executa a criação da tabela
if ($conn->query($sql) === TRUE) {
    echo "Tabela 'usuarios' criada com sucesso!";
} else {
    echo "Erro ao criar a tabela: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>

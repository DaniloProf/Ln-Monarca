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

$conn->close(); //fechar conexao 

?>
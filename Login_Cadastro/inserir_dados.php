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

//selecionar tabela e inserir dados 
$table = "usuarios";
$nome = "FILIpe";
$email = "FILIPE@GMAIL.COM";
$senha = "9872222222";
$q = "INSERT INTO $table (nome, email, senha) VALUES ('$nome', '$email','$senha')";
$conn->query($q);
$conn->close();//fechar as q fexhar

?>
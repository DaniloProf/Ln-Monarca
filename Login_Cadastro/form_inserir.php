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
//ve3rificar se o formulario foi submetido
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //prepara a consulta SQL para inserir o cliente
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome', '$email', '$senha')";

    if($conn->query($sql) === true){
        echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
        header('Location: LOGIN.html');
        exit;

    }else{
        echo "erro : " . $sql . "<br>" . $conn->error;
    }
}




$conn->close(); //fechar conexao 

?>
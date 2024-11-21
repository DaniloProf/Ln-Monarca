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

//consulta sql para selecionar todos dados da tabela cliente
$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);//executar a query

//inicio da tabela html
echo "<table border= '1'>";
echo "<tr> <th> id </th><th> Nome </th> <th>email</th>";

//verificar se a consulta retornou os resultados
if($result->num_rows > 0){
    //exibir dados cada linha
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>". $row['id']. "</td>";
        echo "<td>". $row['nome']. "</td>";
        echo "<td>". $row['email']. "</td>";
        echo "<td>". $row['senha']. "</td>";
        echo "</tr>";
    }
}else{
    echo"<tr><td colspan='2'> 0 results</td></tr>";//caso nao haja results
}
//fim tabela html
echo "</table>";


$conn->close(); //fechar conexao 

?>
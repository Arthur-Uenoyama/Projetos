<?php
$servername = "localhost";  // servidor
$username = "root";         // usuário do banco de dados
$password = "";             // senha do banco de dados
$dbname = "estoque_quimica"; // nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

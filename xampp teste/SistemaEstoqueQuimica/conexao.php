<?php
$serv = "127.0.0.1:3306";  // Use a porta correta (3306 no XAMPP)
$user = "root";             // Usuário padrão no XAMPP
$pass = "";                 // Senha vazia por padrão no XAMPP
$db = "dbEstoqueQuimica";   // Certifique-se de que o banco de dados existe

try {
    // Criando a conexão com o banco de dados usando PDO
    $conn = new PDO("mysql:host=$serv;dbname=$db", $user, $pass);
    
    // Definindo o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    // Se houver erro, exibe a mensagem e encerra o script
    echo "Conexão falhou: " . $e->getMessage();
    exit();
}
?>

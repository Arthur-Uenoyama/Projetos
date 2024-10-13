<?php
$serv = "127.0.0.1:3306"; 
$user = "root"; 
$pass = ""; 
$db = "dbEstoqueQuimica";

try {
    $conn = new PDO("mysql:host=$serv;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
    exit();
}
?>
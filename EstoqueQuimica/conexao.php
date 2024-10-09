<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "usbw";
$dbname = "dbEstoqueQuimica";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}
?>

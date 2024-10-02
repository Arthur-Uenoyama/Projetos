<?php
// Conexão com o banco de dados (substitua com suas próprias credenciais)
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "congressocristao";
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

// Processar a pesquisa
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Consulta SQL para buscar dados com base no termo de pesquisa
    $sql = "SELECT * FROM criarevento WHERE cidade LIKE '%$searchTerm%'";
    $result = $conexao->query($sql);

    // Exibir resultados
    if ($result->num_rows > 0) {
        // Se a cidade estiver no banco de dados, redirecione para resultadocidade.php
        header("Location: resultadocidade.php?search=$searchTerm");
        exit();
    } else {
        // Se a cidade não estiver no banco de dados, redirecione para outra página
        header("Location: nenhumresultado.php");
        exit();
    }
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "congressocristao";
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

function getChurchName($conn, $IDPerfil) {
    $sql = "SELECT * FROM IDPerfil WHERE id = $NomeIgreja";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["NomeIgreja"];
    } else {
        return "Igreja não encontrada";
    }
}


$IDPerfil = 1; // Substitua pelo 'IDPerfil' desejado.

$sql = "SELECT * FROM perfil WHERE IDPerfil = $IDPerfil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $NomePerfil = $row["NomePerfil"];
} else {
    // Trate o caso em que o perfil não foi encontrado.
    $NomePerfil = "Perfil não encontrado";
}

$IDPerfil = 1; // Substitua pelo ID do usuário atual

$sql = "SELECT * FROM criarevento WHERE IDPerfil = $IDPerfil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Exiba as informações do evento, por exemplo:
        echo "Nome do evento: " . $row["NomeEvento"] . "<br>";
        echo "Data do evento: " . $row["DataEvento"] . "<br>";
        // Adicione outras informações conforme necessário
    }
} else {
    echo "Nenhum evento cadastrado no perfil deste usuário.";
}

?>
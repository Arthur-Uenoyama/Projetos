<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM materiais WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Material excluído com sucesso!";
} else {
    echo "Erro ao excluir: " . $conn->error;
}

$conn->close();
header("Location: index.php");
exit;
?>

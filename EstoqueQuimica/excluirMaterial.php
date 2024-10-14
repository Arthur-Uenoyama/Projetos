<?php
include('conexao.php');

$id = $_GET['id'];
$sql = "DELETE FROM tblMateriais WHERE id = :id";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Material excluído com sucesso!";
    } else {
        echo "Erro ao excluir o material.";
    }
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

header("Location: EstoqueMaterial.php");
exit;
?>

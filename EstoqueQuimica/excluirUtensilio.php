<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM tblUtensilios WHERE id = :id";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        echo "Utensílio excluído com sucesso!";
    } else {
        echo "Erro ao excluir o utensílio.";
    }
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

header("Location: EstoqueUtensilio.php");
exit;
?>

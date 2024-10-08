<?php
include('conexao.php');

$id = $_GET['id'];
$sql = "SELECT * FROM materiais WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Material não encontrado!";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_material = $_POST['nome_material'];
    $quantidade = $_POST['quantidade'];
    $unidade_medida = $_POST['unidade_medida'];
    $preco_unidade = $_POST['preco_unidade'];

    $sql = "UPDATE materiais SET nome_material = '$nome_material', quantidade = '$quantidade', 
            unidade_medida = '$unidade_medida', preco_unidade = '$preco_unidade' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Material atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Editar Material</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nome_material" class="form-label">Nome do Material</label>
                <input type="text" class="form-control" id="nome_material" name="nome_material" value="<?php echo $row['nome_material']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?php echo $row['quantidade']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="unidade_medida" class="form-label">Unidade de Medida</label>
                <input type="text" class="form-control" id="unidade_medida" name="unidade_medida" value="<?php echo $row['unidade_medida']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="preco_unidade" class="form-label">Preço por Unidade (R$)</label>
                <input type="number" step="0.01" class="form-control" id="preco_unidade" name="preco_unidade" value="<?php echo $row['preco_unidade']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Material</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

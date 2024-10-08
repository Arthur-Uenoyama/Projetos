<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_material = $_POST['nome_material'];
    $quantidade = $_POST['quantidade'];
    $unidade_medida = $_POST['unidade_medida'];
    $preco_unidade = $_POST['preco_unidade'];

    $sql = "INSERT INTO materiais (nome_material, quantidade, unidade_medida, preco_unidade) 
            VALUES ('$nome_material', '$quantidade', '$unidade_medida', '$preco_unidade')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo material adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Adicionar Novo Material</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nome_material" class="form-label">Nome do Material</label>
                <input type="text" class="form-control" id="nome_material" name="nome_material" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
            </div>
            <div class="mb-3">
                <label for="unidade_medida" class="form-label">Unidade de Medida</label>
                <input type="text" class="form-control" id="unidade_medida" name="unidade_medida" required>
            </div>
            <div class="mb-3">
                <label for="preco_unidade" class="form-label">Preço por Unidade (R$)</label>
                <input type="number" step="0.01" class="form-control" id="preco_unidade" name="preco_unidade" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Material</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

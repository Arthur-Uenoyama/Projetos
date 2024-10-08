<?php
include('conexao.php');

$id = $_GET['id'];
$mensagem = "";

$sql = "SELECT * FROM tblMateriais WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo "Material não encontrado!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_material = $_POST['nome_material'];
    $formula_reagente = $_POST['formula_reagente'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];

    $sql = "UPDATE tblMateriais SET NomeMaterial = :nome_material, FormulaReagente = :formula_reagente, 
            Quantidade = :quantidade, Validade = :validade WHERE id = :id";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome_material', $nome_material);
        $stmt->bindParam(':formula_reagente', $formula_reagente);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':validade', $validade);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            $mensagem = "<div class='alert alert-success mt-3'>Material atualizado com sucesso!</div>";
        } else {
            $mensagem = "<div class='alert alert-danger mt-3'>Erro ao atualizar o material.</div>";
        }
    } catch(PDOException $e) {
        $mensagem = "<div class='alert alert-danger mt-3'>Erro: " . $e->getMessage() . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <link rel="stylesheet" href="css/EstoqueQuimica.css">
    <link rel="icon" href="img/Icone.png" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand">Estoque Química
            <i class="fa-solid fa-flask"></i> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">
                        <i class="fa-solid fa-house"></i> Início
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fa-solid fa-cogs"></i> Materiais
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">
        <h2 class="my-4">Editar Material</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nome_material" class="form-label">Nome do Material</label>
                <input type="text" class="form-control" id="nome_material" name="nome_material" value="<?php echo $row['NomeMaterial']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="formula_reagente" class="form-label">Fórmula do Reagente</label>
                <input type="text" class="form-control" id="formula_reagente" name="formula_reagente" value="<?php echo $row['FormulaReagente']; ?>">
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?php echo intval($row['Quantidade']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="validade" class="form-label">Validade</label>
                <input type="date" class="form-control" id="validade" name="validade" value="<?php echo $row['Validade']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-save"></i> Atualizar Material
            </button>

            <?php echo $mensagem; ?>
        </form>
    </div>

    <footer>
        <div class="footer-container">
            <img src="img/TiLogo.png" alt="Imagem Esquerda" class="footer-img-left">
            <p>&copy; 2024 Estoque Química</p>
            <img src="img/EtecLogo.png" alt="Imagem Direita" class="footer-img-right">
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include('conexao.php');

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_material = $_POST['nome_material'];
    $formula_reagente = $_POST['formula_reagente'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];
    $tipo_reagente = $_POST['tipo_reagente'];
    $laboratorio = $_POST['laboratorio'];

    $sql = "INSERT INTO tblMateriais (NomeMaterial, FormulaReagente, TipoReagente, Quantidade, Validade, Laboratorio) 
            VALUES (:nome_material, :formula_reagente, :tipo_reagente, :quantidade, :validade, :laboratorio)";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome_material', $nome_material);
        $stmt->bindParam(':formula_reagente', $formula_reagente);
        $stmt->bindParam(':tipo_reagente', $tipo_reagente);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':validade', $validade);
        $stmt->bindParam(':laboratorio', $laboratorio);

        if ($stmt->execute()) {
            $mensagem = "<div class='alert alert-success mt-3'>Novo material adicionado com sucesso!</div>";
        } else {
            $mensagem = "<div class='alert alert-danger mt-3'>Erro ao adicionar o material.</div>";
        }
    } catch(PDOException $e) {
        $mensagem = "<div class='alert alert-danger mt-3'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/EstoqueQuimica.css">
    <link rel="icon" href="img/frascoicone.png" type="image/x-icon">
    <style>
        body {
            background-image: url('img/wallpaperQuimica.png'); 
            background-size: cover; 
            background-attachment: fixed; 
            background-position: center; 
            color: #ffffff; 
        }
       
    </style>
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
                <li class="nav-item">
                    <button class="btn btn-outline-light" onclick="imprimirPagina()">
                        <i class="fa-solid fa-print"></i> Salvar PDF
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container form-background">
    <h2 class="my-4">Adicionar Novo Material</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome_material" class="form-label">
                <i class="bi bi-clipboard-fill"></i> Nome do Material
            </label>
            <input type="text" class="form-control" id="nome_material" name="nome_material" required>
        </div>
        <div class="mb-3">
            <label for="formula_reagente" class="form-label">
                <i class="fa-solid fa-atom"></i> Fórmula do Reagente
            </label>
            <input type="text" class="form-control" id="formula_reagente" name="formula_reagente">
        </div>
        <div class="mb-3">
            <label for="tipo_reagente" class="form-label">
                <i class="fa-solid fa-tag"></i> Tipo do Reagente
            </label>
            <select class="form-select" id="tipo_reagente" name="tipo_reagente" required>
                <option value="">Selecione o tipo</option>
                <option value="1">Tipo 1</option>
                <option value="2">Tipo 2</option>
                <option value="3">Tipo 3</option>
                <option value="4">Outros</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="laboratorio" class="form-label">
                <i class="bi bi-laptop-fill"></i> Laboratório
            </label>
            <select class="form-select" id="laboratorio" name="laboratorio" required>
                <option value="">Selecione o laboratório</option>
                <option value="1">Química</option>
                <option value="2">Multidisciplinar</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">
                <i class="fa-solid fa-hashtag"></i> Quantidade
            </label>
            <input type="number" step="0.01" class="form-control" id="quantidade" name="quantidade" required>
        </div>
        <div class="mb-3">
            <label for="validade" class="form-label">
                <i class="bi bi-calendar-fill"></i> Validade
            </label>
            <input type="date" class="form-control" id="validade" name="validade" required>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-plus-circle"></i> Adicionar Material
        </button>

        <?php echo $mensagem; ?>
    </form>
</div>
<footer>
    <div class="footer-container">
        <img src="img/TiLogo.png" alt="Imagem Esquerda" class="footer-img-left" style="width:8%">
        <p>&copy; Estoque Química 2024</p>
        <p>ETEC Coronel Raphael Brandão - Barretos/SP : Centro Paula Souza</p>
        <img src="img/EtecLogo.png" alt="Imagem Direita" class="footer-img-right" style="width:15%">
    </div>
</footer>

<script>
function imprimirPagina() {
    window.print();
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

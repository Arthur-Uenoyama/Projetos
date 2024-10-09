<?php
include('conexao.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$mensagem = "";

$sql = "SELECT * FROM tblUtensilios WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo "Utensílio não encontrado!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_utensilio = $_POST['nome_utensilio'];
    $quantidade = $_POST['quantidade'];
    $laboratorio = $_POST['laboratorio'];

    $sql = "UPDATE tblUtensilios SET NomeUtensilio = :nome_utensilio, Quantidade = :quantidade, Laboratorio = :laboratorio 
            WHERE id = :id";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome_utensilio', $nome_utensilio);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':laboratorio', $laboratorio);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            $mensagem = "<div class='alert alert-success mt-3'>Utensílio atualizado com sucesso!</div>";
        } else {
            $mensagem = "<div class='alert alert-danger mt-3'>Erro ao atualizar o utensílio.</div>";
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
    <title>Editar Utensílio</title>
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
                    <a class="nav-link" href="index2.php">
                        <i class="fa-solid fa-flask"></i> Utensílios
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
    <h2 class="my-4">Editar Utensílio</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome_utensilio" class="form-label">
                <i class="bi bi-clipboard-fill"></i> Nome do Utensílio
            </label>
            <input type="text" class="form-control" id="nome_utensilio" name="nome_utensilio" value="<?php echo htmlspecialchars($row['NomeUtensilio']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">
                <i class="fa-solid fa-hashtag"></i> Quantidade
            </label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?php echo htmlspecialchars($row['Quantidade']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="laboratorio" class="form-label">
                <i class="bi bi-laptop-fill"></i> Laboratório
            </label>
            <input type="text" class="form-control" id="laboratorio" name="laboratorio" value="<?php echo htmlspecialchars($row['Laboratorio']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-save"></i> Atualizar Utensílio
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

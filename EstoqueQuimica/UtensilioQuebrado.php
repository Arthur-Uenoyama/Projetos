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
    $quantidade_subtrair = isset($_POST['quantidade_subtrair']) ? intval($_POST['quantidade_subtrair']) : 0;

    if ($quantidade_subtrair > 0 && $quantidade_subtrair <= $row['Quantidade']) {
        $nova_quantidade = $row['Quantidade'] - $quantidade_subtrair;

        $sql = "UPDATE tblUtensilios SET Quantidade = :nova_quantidade WHERE id = :id";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nova_quantidade', $nova_quantidade);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute()) {
                $mensagem = "<div class='alert alert-success mt-3'>Quantidade salva com sucesso!</div>";
            } else {
                $mensagem = "<div class='alert alert-danger mt-3'>Erro.</div>";
            }
        } catch(PDOException $e) {
            $mensagem = "<div class='alert alert-danger mt-3'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
        }
    } else {
        $mensagem = "<div class='alert alert-danger mt-3'>Quantidade inválida.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utensílio Quebrado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/EstoqueQuimica.css">
    <link rel="icon" href="img/icone.png" type="image/x-icon">
    <style>
        body {
            background-image: url('img/wallpaper3.png'); 
            background-size: cover; 
            background-attachment: fixed; 
            background-position: center; 
            color: #ffffff; 
        }

        .form-background {
            background-color: white; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-control, label {
            color: black; 
        }

        h2 {
            color: black; 
        }
       
        footer {
            background-color: #6f42c1; 
            color: #fff;
            text-align: center;
            padding: 80px 0;
        }
        .btn:hover {
            background-color: #6c757d !important; 
            border-color: #6c757d !important; 
        }

        .navbar-dark .nav-link:hover {
            background-color: #6c757d; 
            color: white !important; 
            border-radius: 5px; 
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
                    <a class="nav-link" href="EstoqueUtensilio.php">
                        <i class='fas fa-vials'></i> Utensílios
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

<div class="container form-background my-4 mb-5">
    <h2 class="my-4">Utensílio Quebrado: <?php echo htmlspecialchars($row['NomeUtensilio']); ?></h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="quantidade_subtrair" class="form-label">
                <i class="fa-solid fa-hashtag"></i> Quantidade Quebrada
            </label>
            <input type="number" class="form-control" id="quantidade_subtrair" name="quantidade_subtrair" min="1" max="<?php echo intval($row['Quantidade']); ?>" required>
        </div>
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-exclamation-triangle"></i> Salvar
        </button>
        <a href="EstoqueUtensilio.php" class="btn btn-danger" style='background-color: #FF0000; border-color: #FF0000; color: white;'>
            <i class="fa-solid fa-times-circle"></i> Cancelar
        </a>
        <?php echo $mensagem; ?>
    </form>
</div>

<!-- Espaço extra antes do footer -->
<div style="height: 315px;"></div> 

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off mt-auto" style="position:relative;">
  <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
    <img src="img/TiLogo1.png" alt="Logo Esquerdo" style="width:60px;">
    <div>
      <p class="text-white">© Estoque Química 2024</p>
      <p class="text-white">ETEC Coronel Raphael Brandão - Barretos/SP | Centro Paula Souza</p>
    </div>
    <img src="img/EtecLogo1.png" alt="Logo Direito" style="width:100px;">
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

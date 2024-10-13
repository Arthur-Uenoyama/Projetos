<?php
include('conexao.php'); 

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_utensilio = $_POST['nome_utensilio'];
    $quantidade = $_POST['quantidade'];
    $laboratorio = $_POST['laboratorio'];

    $sql = "INSERT INTO tblUtensilios (NomeUtensilio, Quantidade, Laboratorio) VALUES (:nome_utensilio, :quantidade, :laboratorio)";
    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':nome_utensilio', $nome_utensilio);
    $stmt->bindValue(':quantidade', $quantidade);
    $stmt->bindValue(':laboratorio', $laboratorio);

    if ($stmt->execute()) {
        header("Location: EstoqueUtensilio.php"); 
        exit(); 
    } else {
        $mensagem = "Erro ao adicionar utensílio.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Utensílio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/EstoqueQuimica.css">
    <link rel="icon" href="img/icone.png" type="image/x-icon">
    <style>
        body {
            background-image: url('img/wallpaper3.png'); 
            background-size: cover; 
            background-attachment: fixed; 
            background-position: center; 
            color: #ffffff; 
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        .container {
            flex: 1; 
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
            padding: 20px;
            margin-top: auto; 
        }

        footer .w3-section i {
            margin-right: 10px;
            cursor: pointer;
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
<br>
<div class="container form-background">
    <h2 class="my-4">Adicionar Novo Utensílio</h2>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome_utensilio" class="form-label">
                <i class="bi bi-clipboard-fill"></i> Nome do Utensílio
            </label>
            <input type="text" class="form-control" id="nome_utensilio" name="nome_utensilio" required>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">
                <i class="fa-solid fa-hashtag"></i> Quantidade
            </label>
            <input type="number" step="0.01" class="form-control" id="quantidade" name="quantidade" required>
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
        <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-plus-circle"></i> Adicionar Utensílio
        </button>
        <a href="EstoqueUtensilio.php" class="btn btn-danger" style='background-color: #FF0000; border-color: #FF0000; color: white;'>
            <i class="fa-solid fa-times-circle"></i> Cancelar
        </a>
    </form>

    <?php if ($mensagem): ?>
        <div class="alert alert-info mt-3" role="alert">
            <?php echo $mensagem; ?>
        </div>
    <?php endif; ?>
</div>
<br>
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

<?php
include('conexao.php');

$sqlTipos = "SELECT id, Descricao FROM tblTiposReagentes";
$stmtTipos = $conn->prepare($sqlTipos);
$stmtTipos->execute();
$tiposReagentes = $stmtTipos->fetchAll(PDO::FETCH_ASSOC);

$sqlUtensilios = "SELECT u.id, u.NomeUtensilio, u.Tipo, u.Quantidade, l.Descricao AS NomeLaboratorio 
                  FROM tblUtensilios u
                  JOIN tblLaboratorio l ON u.Laboratorio = l.id
                  ORDER BY u.NomeUtensilio ASC";

$stmtUtensilios = $conn->prepare($sqlUtensilios);
$stmtUtensilios->execute();
$utensilios = $stmtUtensilios->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de Utensílios Químicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/EstoqueQuimica.css">
    <link rel="icon" href="img/frascoicone.png" type="image/x-icon">
    <style>
        body {
            background-image: url('img/wallpaperQuimica.png'); 
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

        footer {
            background-color: #6f42c1; 
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }

        footer .social-icons i {
            margin-right: 10px;
            cursor: pointer;
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
                    <a class="nav-link" href="EstoqueMaterial.php">
                        <i class="fa-solid fa-cogs"></i> Materiais
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="EstoqueUtensilio.php">
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

<div class="container">
    <h2 class="my-4">Utensílios em Estoque</h2>
    
    <form method="GET" class="mb-3">
        <div class="input-group">
            <select name="laboratorio" class="form-control">
                <option value="">Pesquisar Laboratório</option>
                <option value="1">Química</option>
                <option value="2">Multidisciplinar</option>
            </select>
            <button class="btn btn-purple" style="background-color: darkviolet; color: white;" type="submit">Pesquisar <i class="bi bi-search"></i></button>
        </div>
    </form>
    
    <a href="AdicionarUtensilio.php" class="btn btn-primary mb-3">Adicionar Utensílio</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><i class="bi bi-clipboard-fill"></i> Nome do Utensílio</th>
                <th><i class="fa-solid fa-hashtag"></i> Quantidade</th>
                <th><i class="bi bi-laptop-fill"></i> Laboratório</th>
                <th><i class="fa-solid fa-tools"></i> Alterações</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $laboratorio = isset($_GET['laboratorio']) ? $_GET['laboratorio'] : '';

        $sql = "SELECT u.id, u.NomeUtensilio, u.Quantidade, l.Descricao AS NomeLaboratorio 
                FROM tblUtensilios u
                JOIN tblLaboratorio l ON u.Laboratorio = l.id
                WHERE (u.Laboratorio = :laboratorio OR :laboratorio = '')
                ORDER BY u.NomeUtensilio ASC";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':laboratorio', $laboratorio);
        $stmt->execute();

        $utensilios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($utensilios) > 0) {
            foreach ($utensilios as $utensilio) {
                echo "<tr>";
                echo "<td>" . $utensilio['NomeUtensilio'] . "</td>";
                echo "<td>" . intval($utensilio['Quantidade']) . "</td>";
                echo "<td>" . $utensilio['NomeLaboratorio'] . "</td>";
                echo "<td>
                    <a href='EditarUtensilio.php?id=" . $utensilio['id'] . "' class='btn btn-warning btn-sm'>
                        <i class='bi bi-clipboard-check'></i> Editar
                    </a>
                    <a href='excluirUtensilio.php?id=" . $utensilio['id'] . "' class='btn btn-danger btn-sm'>
                        <i class='bi bi-trash'></i> Excluir
                    </a>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum utensílio encontrado</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off mt-auto">
  <div class="container">
    <p>© Estoque Quimica 2024</p>
    <p class="text-white">ETEC Coronel Raphael Brandão - Barretos/SP | Centro Paula Souza</p>
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

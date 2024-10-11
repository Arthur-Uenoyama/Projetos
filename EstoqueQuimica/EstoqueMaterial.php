<?php
include('conexao.php');
$sqlTipos = "SELECT id, Descricao FROM tblTiposReagentes";
$stmtTipos = $conn->prepare($sqlTipos);
$stmtTipos->execute();
$tiposReagentes = $stmtTipos->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de Materiais Químicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
        .custom-jumbo {
            background-color: #6f42c1;
            color: white !important; 
            border-radius: 45px;
            padding: 10px 10px; 
            font-size: 40px; 
            text-align: left; 
            width: fit-content; 
            margin-top: 5px;
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
                    <a class="nav-link" href="EstoqueMaterial.php">
                        <i class="fa-solid fa-cogs"></i> Materiais
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

<div class="container">
<h2 class="my-4 custom-jumbo"><i class="bi bi-archive-fill"> Materiais em Estoque</i></h2>
    <form method="GET" class="mb-3">
        <div class="input-group">
            <select name="tipo_reagente" class="form-control">
                <option value="">Pesquisar Tipo de Reagente</option>
                <?php foreach ($tiposReagentes as $tipo): ?>
                    <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['Descricao']; ?></option>
                <?php endforeach; ?>
            </select>
            <select name="laboratorio" class="form-control">
                <option value="">Pesquisar Laboratório</option>
                <option value="1">Química</option>
                <option value="2">Multidisciplinar</option>
            </select>
            <button class="btn btn-purple" style='background-color: #6f42c1; border-color: #6f42c1; color: white;' type="submit">Pesquisar <i class="bi bi-search"></i></button>
        </div>
    </form>

    <a href="AdicionarMaterial.php" class="btn btn-primary mb-3"><i class="fa-solid fa-plus-circle"></i> Adicionar Material</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><i class="bi bi-clipboard-fill"></i> Nome do Material</th>
                <th><i class="fa-solid fa-atom"></i> Fórmula do Reagente</th>
                <th><i class="fa-solid fa-book-dead"></i> Tipo do Reagente</th>
                <th><i class="fa-solid fa-hashtag"></i> Quantidade</th>
                <th><i class="bi bi-laptop-fill"></i> Laboratório</th>
                <th><i class="bi bi-calendar-fill"></i> Validade</th>
                <th><i class="fa-solid fa-tools"></i> Alterações</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $tipo_reagente = isset($_GET['tipo_reagente']) ? $_GET['tipo_reagente'] : '';
    $laboratorio = isset($_GET['laboratorio']) ? $_GET['laboratorio'] : '';
    
    $sql = "SELECT m.id, m.NomeMaterial, m.FormulaReagente, t.Descricao AS TipoReagente, 
                   m.Quantidade, m.Validade, l.Descricao AS NomeLaboratorio 
            FROM tblMateriais m
            JOIN tblTiposReagentes t ON m.TipoReagente = t.id
            JOIN tblLaboratorio l ON m.Laboratorio = l.id
            WHERE (t.id = :tipo_reagente OR :tipo_reagente = '')
            AND (m.Laboratorio = :laboratorio OR :laboratorio = '')
            ORDER BY m.NomeMaterial ASC";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':tipo_reagente', $tipo_reagente);
    $stmt->bindValue(':laboratorio', $laboratorio);
    $stmt->execute();

    $materiais = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $data_atual = date('Y-m-d');

    if (count($materiais) > 0) {
        foreach ($materiais as $row) {
            $validade = $row['Validade'];
            $validade_formatada = date('d/m/Y', strtotime($validade));
            $quantidade = intval($row['Quantidade']);
            $classe = (strtotime($validade) < strtotime($data_atual)) ? 'table-danger' : '';
            
            echo "<tr class='$classe'>";
            echo "<td>" . $row['NomeMaterial'] . "</td>";
            echo "<td>" . $row['FormulaReagente'] . "</td>";
            echo "<td>" . $row['TipoReagente'] . "</td>";
            echo "<td>" . $quantidade . "</td>";  
            echo "<td>" . $row['NomeLaboratorio'] . "</td>";
            echo "<td>" . $validade_formatada . "</td>"; 
            echo "<td>
                    <a href='EditarMaterial.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm' style='background-color: #6f42c1; border-color: #6f42c1; color: white;'>
                        <i class='bi bi-clipboard-check'></i> Editar
                    </a>
                    <a href='ConsumoMaterial.php?id=" . $row['id'] . "' class='btn btn-sm' style='background-color: #6f42c1; border-color: #6f42c1; color: white;'>
                        <i class='bi bi-arrow-down-circle'></i> Consumo
                    </a>
                    <a href='excluirMaterial.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' style='background-color: #FF0000; border-color: #FF0000; color: white;'>
                        <i class='bi bi-trash'></i> Excluir
                    </a>
                </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Nenhum material encontrado</td></tr>";
    }
    ?>
    </tbody>
    </table>
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

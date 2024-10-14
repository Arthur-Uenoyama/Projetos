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
            overflow: hidden; /* Adicionado para esconder o conteúdo durante o carregamento */
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

        /* Estilos para a tela de carregamento */
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 9999;
        }

        .test-tube {
            width: 40px;
            height: 200px;
            background: linear-gradient(to top, #6f42c1 0%, #a06fc1 100%);
            border: 5px solid #555;
            border-radius: 20px 20px 0 0;
            position: relative;
            overflow: hidden;
            transform: rotate(180deg);
        }

        .bubble {
            position: absolute;
            bottom: 0;
            background-color: white;
            border-radius: 50%;
            opacity: 0.7;
            animation: bubble-animation 1s infinite;
        }

        @keyframes bubble-animation {
            0% {
                transform: translateY(0);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 0.7;
            }
        }

        .loading-text {
            margin-top: 10px;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>
<div id="loader">
    <div class="test-tube">
        <div class="bubble" style="width: 15px; height: 15px; left: 10%; animation-delay: 0s;"></div>
        <div class="bubble" style="width: 10px; height: 10px; left: 30%; animation-delay: 0.2s;"></div>
        <div class="bubble" style="width: 20px; height: 20px; left: 50%; animation-delay: 0.4s;"></div>
        <div class="bubble" style="width: 12px; height: 12px; left: 70%; animation-delay: 0.6s;"></div>
    </div>
    <div class="loading-text">Carregando...</div>
</div>

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
<h2 class="my-4 custom-jumbo"><i class="fas fa-toolbox"></i> Utensílios em Estoque</h2>
    <form method="GET" class="mb-3">
        <div class="input-group">
            <select name="laboratorio" class="form-control">
                <option value="">Pesquisar Laboratório</option>
                <option value="1">Química</option>
                <option value="2">Multidisciplinar</option>
            </select>
            <button class="btn btn-purple" style='background-color: #6f42c1; border-color: #6f42c1; color: white;' type="submit">Pesquisar <i class="bi bi-search"></i></button>
        </div>
    </form>
    
    <a href="AdicionarUtensilio.php" class="btn btn-primary mb-3"><i class="fa-solid fa-plus-circle"></i> Adicionar Utensílio</a>
    
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
                            <a href='EditarUtensilio.php?id=" . $utensilio['id'] . "' class='btn btn-warning btn-sm' style='background-color: #6f42c1; border-color: #6f42c1; color: white;'>
                                <i class='bi bi-clipboard-check'></i> Editar
                            </a>
                            <a href='UtensilioQuebrado.php?id=" . $utensilio['id'] . "' class='btn btn-secondary btn-sm' style='background-color: #ffcc00; border-color: #ffcc00; color: black;'>
                                <i class='fas fa-exclamation-triangle'></i> Quebrado
                            </a>
                            <a href='excluirUtensilio.php?id=" . $utensilio['id'] . "' class='btn btn-danger btn-sm' style='background-color: #FF0000; border-color: #FF0000; color: white;'>
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

window.onload = function() {
    setTimeout(function() {
        document.getElementById('loader').style.display = 'none';
        document.body.style.overflow = 'auto';
    }, 3000);
};
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

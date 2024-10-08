<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de Materiais Químicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        .btn-primary, .btn-warning, .btn-danger {
            background-color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-primary:hover, .btn-warning:hover, .btn-danger:hover {
            background-color: #5a3598;
            border-color: #5a3598;
        }

        /* Navbar com cor roxa */
        .navbar {
            background-color: #6f42c1 !important;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: white;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ddd;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #6f42c1; /* Cor roxa */
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .footer-img-left {
            width: 50px; /* tamanho das imagens */
        }
        .footer-img-right {
            width: 90px; /* tamanho das imagens */
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
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
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa-solid fa-house"></i> Início
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-cogs"></i> Materiais
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h2 class="my-4">Materiais Químicos em Estoque</h2>
    <a href="adicionar.php" class="btn btn-primary mb-3">Adicionar Material</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Material</th>
                <th>Fórmula do Reagente</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('conexao.php');
            $sql = "SELECT id, NomeMaterial, FormulaReagente, Quantidade, DATE_FORMAT(Validade, '%d/%m/%Y') AS ValidadeFormatada FROM tblMateriais";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $materiais = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($materiais) > 0) {
                foreach ($materiais as $row) {
                    // Formatar a validade
                    $validade = $row['ValidadeFormatada'];
                    // Obter quantidade como número inteiro
                    $quantidade = intval($row['Quantidade']);
                    
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['NomeMaterial'] . "</td>";
                    echo "<td>" . $row['FormulaReagente'] . "</td>";
                    echo "<td>" . $quantidade . "</td>";
                    echo "<td>" . $validade . "</td>";
                    echo "<td>
                        <a href='editar.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>
                            <i class='bi bi-clipboard-check-fill'></i> Editar
                        </a>
                        <a href='excluir.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>
                            <i class='bi bi-trash-fill'></i> Excluir
                        </a>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum material encontrado</td></tr>";
            }
            ?>
        </tbody>
    </table>
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

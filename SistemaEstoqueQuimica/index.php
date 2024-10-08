<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de Materiais Química</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-primary, .btn-warning, .btn-danger {
            background-color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-primary:hover, .btn-warning:hover, .btn-danger:hover {
            background-color: #5a3598;
            border-color: #5a3598;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Estoque Química</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Materiais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatórios</a>
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
                    <th>Quantidade</th>
                    <th>Unidade de Medida</th>
                    <th>Preço por Unidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('conexao.php');
                $sql = "SELECT * FROM materiais";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nome_material'] . "</td>";
                        echo "<td>" . $row['quantidade'] . "</td>";
                        echo "<td>" . $row['unidade_medida'] . "</td>";
                        echo "<td>R$ " . $row['preco_unidade'] . "</td>";
                        echo "<td>
                            <a href='editar_material.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='excluir_material.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Excluir</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

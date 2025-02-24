<?php
session_start();
include 'dbHotel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);
    $tipo = $_POST['tipo']; // 'cliente' ou 'hotel'

    try {
        $stmt = $pdo->prepare("INSERT INTO Usuarios (Nome, Email, Senha, Tipo) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $senha, $tipo]);
        
        $_SESSION['mensagem_sucesso'] = "Cadastro realizado com sucesso! Faça login.";
        header("Location: login.php");
        exit;
    } catch (PDOException $e) {
        $erro = "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-3">Cadastro</h3>
        <?php if (isset($erro)): ?>
            <div class="alert alert-danger"> <?php echo $erro; ?> </div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de Conta</label>
                <select name="tipo" class="form-select" required>
                    <option value="cliente">Cliente</option>
                    <option value="hotel">Hotel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="login.php" class="btn btn-link">Já tem uma conta? Faça login</a>
        </form>
    </div>
</body>
</html>

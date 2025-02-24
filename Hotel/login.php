<?php
session_start();
include 'dbHotel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    try {
        $stmt = $pdo->prepare("SELECT Id, Nome, Email, Senha, Tipo FROM Usuarios WHERE Email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['Senha'])) {
            $_SESSION['usuarioId'] = $usuario['Id'];
            $_SESSION['usuarioNome'] = $usuario['Nome'];
            $_SESSION['usuarioTipo'] = $usuario['Tipo']; // 'cliente' ou 'hotel'
            
            header("Location: perfil.php");
            exit;
        } else {
            $erro = "Email ou senha inválidos.";
        }
    } catch (PDOException $e) {
        $erro = "Erro ao conectar ao banco de dados.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-3">Login</h3>
        <?php if (isset($erro)): ?>
            <div class="alert alert-danger"> <?php echo $erro; ?> </div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="cadastro.php" class="btn btn-link">Criar Conta</a>
        </form>
    </div>
</body>
</html>

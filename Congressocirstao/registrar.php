<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Registrar-se</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/registrar.css">
  <style>
    body {
      background-image: url("img/login.jpg");
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body>
<div class="container">
    <div class="w3-container w3-card-4">
      <h2 class="w3-center">Registrar-se</h2>
      <form class="w3-container" action="registrarAction.php" method="POST">
        <label class="w3-label"><i class="fas fa-church"></i> Nome da Igreja:</label>
        <input class="w3-input w3-border" type="text" name="txtNomeIgreja" id="nomeInput" required>

        <label class="w3-label"><i class="fas fa-user"></i> Nome do Perfil:</label>
        <input class="w3-input w3-border" type="text" name="txtNomePerfil" id="nomeInput" required>

        <label class="w3-label"><i class="fa fa-address-card"></i> CNPJ:</label>
        <input class="w3-input w3-border" type="text" name="txtCNPJ" id="cnpjInput" required>

        <label class="w3-label"><i class="fas fa-envelope-open"></i> E-mail:</label>
        <input class="w3-input w3-border" type="email" name="txtEmail" id="emailInput" required>

        <div class="password-toggle">
          <label class="w3-label"><i class="fas fa-lock"></i> Senha:</label>
          <input class="w3-input w3-border" type="password" name="txtSenha" id="senhaInput" required>
          <span class="toggle-button" onclick="togglePasswordVisibility('senhaInput')">&#128065;</span>
        </div>

        <div class="password-toggle">
          <label class="w3-label"><i class="fas fa-lock"></i> Confirmar Senha:</label>
          <input class="w3-input w3-border" type="password" name="txtConfirmarSenha" id="confirmarSenhaInput" required>
          <span class="toggle-button" onclick="togglePasswordVisibility('confirmarSenhaInput')">&#128065;</span>
        </div>

        <div class="register-button-container">
        <button type="submit" class="w3-button w3-round w3-green"> 
      <i class="w3-large fa fa-refresh"></i> Registrar
    </button>
        </div>
      </form>
    </div>
  </div>

  <script src="js/registar.js"></script>

 
</body>
</html>
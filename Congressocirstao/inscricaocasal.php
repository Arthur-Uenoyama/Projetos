<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Inscrição para o Evento</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/inscricaocasal.css">
  <style>
   body {
      background-image: url("img/inscrição.jpg");
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body class="site-background">
  <div class="w3-container">
    <h2>Prencha o Formulario de Inscrição</h2>
    <div class="w3-container">
  <h2>Dados do Casal</h2>
  <form class="w3-container w3-card-4" action="inscricaocasalAction.php" method="POST">
    <label class="w3-label"><i class="fa fa-male w3-text-green"></i> Nome do Marido:</label>
    <input class="w3-input" type="text" name="txtNomeMarido" required>

    <label class="w3-label"><i class="fa fa-address-card w3-text-green"></i> CPF do Marido:</label>
    <input class="w3-input" type="text" name="txtCPFMarido" required>

    <label class="w3-label"><i class="fa fa-female w3-text-green"></i> Nome da Esposa:</label>
    <input class="w3-input" type="text" name="txtNomeEsposa" required>

    <label class="w3-label"><i class="fa fa-address-card w3-text-green"></i> CPF da Esposa: </label>
    <input class="w3-input" type="text" name="txtCPFEsposa" required>

    <label class="w3-label"><i class="fa fa-calendar-alt w3-text-green"></i> Data de Casamento:</label>
    <input class="w3-input" type="date" name="txtDataCasamento" required>

    <label class="w3-label"><i class="fa fa-map-marker-alt w3-text-green"></i> CEP/Endereço:</label>
    <input class="w3-input" type="text" name="txtCEPEndereco" required>

    <h4>Você tem filhos e deseja levá-los?</h4>
    <button class="w3-button w3-round w3-metro-dark-green" type="button" onclick="showChildForm()">
    <i class="w3-margin-right w3-text-green w3-large w3-check-square"></i>Sim</button>
    <button name="btnNao" class="w3-button w3-round w3-red"><i class="w3-margin-right w3-text-white w3-large w3-check-square"></i>Não</button>
    
      <div id="child-form" class="hidden">
      <p>Preencha os dados das crianças</p>
      <div class="w3-row-padding-vertical">
      <div class="w3-half">
              
      <label class="w3-label"><i class="fa fa-child w3-text-green"></i> Número de Crianças (de 0 a 12 anos):</label>
      <input class="w3-input" type="number" name="txtCrianca0a12">

      <label class="w3-label"><i class="fa fa-child w3-text-green"></i> Número de Crianças (de 13 a 17 anos):</label>
      <input class="w3-input" type="number" name="txtCrianca13a17">

      <label class="w3-label"><i class="fa fa-child w3-text-green"></i> Nome da Criança:</label>
      <input class="w3-input" type="text" name="txtNomeCrianca">

      <label class="w3-label"><i class="fa fa-address-card w3-text-green"></i> CPF da Crainça:</label>
      <input class="w3-input" type="text" name="txtCPFCrianca">

      <label class="w3-label"><i class="fa fa-calendar-alt w3-text-green"></i> Data de Nascimento:</label>
      <input class="w3-input" type="date" name="txtDataNascimento">

      </div>
      </div>
      </div>

    <!-- Botões -->
    <div class="button-container">
    <button class="w3-button w3-round w3-red" type="button" onclick="redirecionarVoltarPagina(); return false;">
            <i class="w3-margin-right w3-text-white w3-large w3-right-arrow"></i>Cancelar
        </button>
    <button name="btnProximo" class="w3-button w3-round w3-metro-dark-green w3-margin-right w3-text-white w3-large w3-right-arrow"> Proximo</button>
    </div>
  </form>
</div>
    <!-- Fim da coluna do meio -->
    </div>
  </div>
</div>
<br>

  <script> 
  // Script para botão que sim ou não tem filho
  function showChildForm() {
      var childForm = document.getElementById("child-form");
      childForm.classList.remove("hidden");
  }
    
  function hideChildForm() {
    var childForm = document.getElementById("child-form");
    childForm.classList.add("hidden");
  }


  function redirecionarVoltarPagina() {
  window.location.href = "evento.php"; // Redireciona para a voltar página
  }
  </script>


</body>
</html>
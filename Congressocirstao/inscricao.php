<!DOCTYPE html>
<html>
<head>
  <title>Inscrição para o Evento</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-image: url("logosite.jpg");
      background-size: cover;
      background-position: center;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .w3-container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 5px;
    }

    .w3-row-padding-vertical {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .w3-row-padding-vertical .w3-half {
      flex: 50%;
      padding: 0 16px;
    }

    /* Adicionando margem inferior aos botões */
    .w3-button {
      margin-bottom: 10px;
    }

    .hidden {
      display: none;
    }
  </style>
  <script>
    function redirecionarProximaPagina() {
      window.location.href = "pacote.php"; // Redireciona para a próxima página na mesma aba
    }

    function showChildForm() {
      var childForm = document.getElementById("child-form");
      childForm.classList.remove("hidden");
    }
    
    function hideChildForm() {
      var childForm = document.getElementById("child-form");
      childForm.classList.add("hidden");
    }
  </script>
</head>
<body class="site-background">
  <div class="w3-container">
    <h2>Inscrição de Evento</h2>
    <form class="w3-container w3-card-4" target="_blank"> <!-- Adiciona o atributo target="_blank" -->
      <h3>Prencher com os seus dados</h3>
      <div class="w3-row-padding-vertical">
        <div class="w3-half">
        <label><i class="w3-margin-right w3-text-teal w3-large fa fa-user"></i>Nome Completo:</label>
          <input class="w3-input" type="text" name="marido_nome">
        </div>
      </div>
      <div class="w3-row-padding-vertical">
        <div class="w3-half">
          <label><i class="w3-margin-right w3-text-teal w3-large fa fa-address-card"></i>CPF:</label>
          <input class="w3-input" type="text" name="marido_cpf">
        </div>
      </div>

      <div class="w3-row-padding-vertical">
        <div class="w3-half">
          <label><i class="w3-margin-right w3-text-teal w3-large w3-calendar fa fa-calendar"></i>Data de nascimento:</label>
          <input class="w3-input" type="date" name="data_casamento">
        </div>
      </div>

      <div class="w3-row-padding-vertical">
        <div class="w3-half">
          <label><i class="w3-margin-right w3-text-teal w3-large w3-location fa fa-address-card"></i>CEP/Endereço :</label>
          <input class="w3-input" type="text" name="esposa_cep">
        </div>
      </div>

      <!-- Botões -->
      <button class="w3-button w3-round w3-teal" type="button" onclick="redirecionarProximaPagina()"><i class="w3-margin-right w3-text-white w3-large w3-right-arrow"></i>Próximo</button>
    </form>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pagamento</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="pacotecasal.css">
</head>
<body>

<?php
// Set the timezone
date_default_timezone_set('America/Sao_Paulo');

require_once('BancoDeDados.php');

// Assuming $IDCriarEvento comes from the URL parameter
$IDCriarEvento = 1;

// Verifies if the connection is defined
if (isset($conn)) {
    // Consultation to obtain the event information
    $query = "SELECT ValorInscricao FROM criarevento WHERE IDCriarevento = $IDCriarEvento";

    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        // Display the results
        $row = $result->fetch_assoc();
        $ValorInscricao = $row["ValorInscricao"];

    

    } else {
        echo "Erro na consulta: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Erro: A conexão com o banco de dados não está definida.";
}
?>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-metro-dark-green w3-card w3-left-align w3-large">
    <a href="inscricaocasal.php" class="w3-bar-item w3-button w3-padding-large w3-green w3-round">Voltar</a>
  </div>
  
 <!-- Navbar tela pequena -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-metro-dark-green w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Pagamento</h1>
  <p class="w3-xlarge">Preço teste</p>
  <h3><span id="valor-total">R$ <?php echo $ValorInscricao?></span> o casal</h3>
  <button class="w3-button w3-green w3-padding-large w3-round w3-large w3-margin-top">Efetuar pagamento</button>
  <h4><strong>Metodo de pagamento</strong></h4>
    <h4>A forma de pagamento será feita integrada com a Sete Seven pay code que é a responsavel por sua inscrição para o evento que deseja participar junto com o seu parceiro ou com sua famila.</h4>
    <h4>Aceitamos: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></h4>
    <hr>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16 footer-left">
  <img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
  <p>Dúvidas: contato@congressocristao.com.br</p>
  <p>Login: Somente para Eventos</p>
  <p>Quer cadastrar seu Evento Cristão? evento@congressocristao.com.br</p>
  <p>Meio de pagamento integrado com a SeteSeven Pay Code</p>
</footer>


<script src="pacotecasal.js"></script>

</body>
</html>

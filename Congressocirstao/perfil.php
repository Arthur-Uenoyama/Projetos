<!DOCTYPE html>
<html>
<head>
  <title>Meu perfil</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
  <link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/perfil.css">
  </head>
  <style>
    .evento-container {
      width: 100%;
      box-sizing: border-box;
      padding: 0 16px;
      margin-bottom: 20px; /* Espaço entre os eventos */
    }
  </style>
<body class="w3-light-grey">

<?php

date_default_timezone_set('America/Sao_Paulo');

require_once('BancoDeDados.php');
require_once('perfilAction.php');

$IDPerfil = 1;

// Consulta SQL para obter os dados da primeira tabela
$sql1 = "SELECT NomeIgreja, NomePerfil, Email, CNPJ FROM perfil WHERE IDPerfil = $IDPerfil";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // Exiba os resultados da primeira tabela
    $row1 = $result1->fetch_assoc();
    $NomeIgreja = $row1["NomeIgreja"];
    $NomePerfil = $row1["NomePerfil"];
    $Email = $row1["Email"];
    $CNPJ = $row1["CNPJ"];
    echo "Nome da Igreja: " . $NomeIgreja;
    echo "Nome do Perfil: " . $NomePerfil;
    echo "Email: " . $Email;
    echo "CNPJ: " . $CNPJ;
} else {
    echo "Nenhum resultado encontrado para a primeira tabela.";
}

$IDCriarEvento = 1;

// Consulta SQL para obter os dados da segunda tabela
$sql2 = "SELECT NomeEvento, Cidade, DataEvento, DataFinalEvento FROM criarevento WHERE IDCriarEvento = $IDCriarEvento";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // Exiba os resultados da segunda tabela
    $row2 = $result2->fetch_assoc();
    $NomeEvento = $row2["NomeEvento"];
    $Cidade = $row2["Cidade"];
    $DataEvento = $row2["DataEvento"];
    $DataFinalEvento = $row2["DataFinalEvento"];
    
    $dataFormatada = date("d", strtotime($DataEvento));
    $dataFinalFormatada = date("d", strtotime($DataFinalEvento));

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
    $mesFormatado = strftime('%B', strtotime($DataEvento));
    $mesFinalFormatado = strftime('%B', strtotime($DataFinalEvento));

    $anoFormatado = date("Y", strtotime($DataEvento));
    $anoFinalFormatado = date("Y", strtotime($DataFinalEvento));
} else {
    echo "Nenhum resultado encontrado para a segunda tabela.";
}

// Consulta SQL para obter os dados dos eventos
$sqlEventos = "SELECT NomeEvento, Cidade, DataEvento, DataFinalEvento FROM criarevento";
$resultEventos = $conn->query($sqlEventos);

$eventos = array(); // Inicializa o array de eventos

if ($resultEventos->num_rows > 0) {
    while ($rowEvento = $resultEventos->fetch_assoc()) {
        $eventos[] = $rowEvento; // Adiciona cada evento ao array
    }
} else {
    echo "Nenhum evento encontrado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>

<!-- Navigation Bar -->
<div class="w3-top">
  <div class="w3-bar w3-metro-dark-green w3-left-align w3-large">
    <a href="congressocristao.php" class="w3-bar-item w3-green w3-button w3-round w3-margin-bottom">
      <i class="fa fa-arrow-circle-left w3-margin-right"></i>Voltar para o início
    </a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
  </div>
</div>

<!-- Page Container -->
<div class="w3-content w3-margin-left" style="max-width:1400px;">
<hr>

  <!-- The Grid -->
  <div class="w3-row-padding">
    <!-- Left Column (Meus Eventos) -->
    <div class="w3-col w3-third" style="margin-top: 50px;">
      <div class="w3-container w3-card w3-metro-dark-green w3-margin-bottom">
        <div class="w3-display-container">
          <hr>
          <h4 class="w3-center">Meu Perfil</h4>
          <p class="w3-center"><img src="img/igreja.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fas fa-church w3-margin-right w3-text-theme"></i><?php echo $NomeIgreja;?></p>
          <p><i class="fa fa-user w3-margin-right w3-text-theme"></i><?php echo $NomePerfil;?></p>
          <p><i class="fa fa-envelope w3-margin-right w3-text-theme"></i><?php echo $Email;?></p>
          <p><i class="fa fa-address-card w3-margin-right w3-text-theme"></i><?php echo $CNPJ;?></p>
          <hr>
          <h5 class="w3-center">Crie o seu evento clicando aqui no botão abaixo</h5>
          <div class="w3-bar w3-theme w3-left-align w3-large">
            <a href="criarevento.php" class="w3-bar-item w3-green w3-button w3-padding-large w3-round">Criar Evento</a>
            <div class="w3-dropdown-hover w3-hide-small"></div>
          </div>
          <br>
        </div>
      </div>
      <br>
    </div>

    <!-- Right Column (Meus Eventos e Editar Eventos em colunas) -->
<div class="w3-col w3-twothird">
  <div class="container">
   <!-- Meus Eventos -->
<div class="column" style="margin-top: 50px;">
  <div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16">
      <i class="fa fa-calendar-alt fa-fw w3-margin-right w3-xxlarge w3-text-green"></i>Meus Eventos
    </h2>
    <hr>
    <div class="w3-row-padding">
      <?php foreach ($eventos as $evento): ?>
        <div class="w3-third w3-container w3-margin-bottom" style="display: inline-block; clear: both;">
          <a href="atualizarevento.php" class="w3-left">
            <i class="fa fa-edit w3-xlarge w3-text-green"></i><b>Editar Evento</b>
          </a>
          <a href="evento.php">
            <img src="img/EventoImagem.jpg" alt="Imagem" style="width:150%" class="w3-round w3-padding-16 w3-hover-opacity">
          </a>
          <div class="w3-left w3-round w3-white">
            <p><b><?php echo isset($evento['NomeEvento']) ? $evento['NomeEvento'] : 'Nome do Evento Indisponível'; ?></b></p>
            <p>Cidade: <?php echo isset($evento['Cidade']) ? $evento['Cidade'] : 'Cidade Indisponível'; ?></p>
            <?php
            $dataInicio = isset($evento['DataEvento']) ? date('d', strtotime($evento['DataEvento'])) : 'Data Indisponível';
            $dataFim = isset($evento['DataFinalEvento']) ? date('d', strtotime($evento['DataFinalEvento'])) : 'Data Final Indisponível';
            $mes = isset($evento['DataEvento']) ? strftime('%B', strtotime($evento['DataEvento'])) : 'Mês Indisponível';
            $ano = isset($evento['DataEvento']) ? date('Y', strtotime($evento['DataEvento'])) : 'Ano Indisponível';
            ?>
            <p>Seu evento irá acontecer nos dias <?php echo $dataInicio; ?> a <?php echo $dataFim; ?> de <?php echo $mes; ?> de <?php echo $ano; ?></p>
          </div>
          <hr style="clear: both;">
        </div>
      <?php endforeach; ?>
    </div>
    <hr>
      </div>
      </div>
    </div>
  </div>
</div>
</hr>
</div>

<!-- Paginação -->
<div class="w3-center w3-padding-32">
    <div class="w3-bar">
    </div>
  </div>

<!-- Footer -->
<footer class="w3-container w3-theme w3-metro-dark-green w3-padding-16">
  <img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
  <p>Dúvidas: contato@congressocristao.com.br</p>
  <p>Login: Somente para Eventos</p>
  <p>Quer cadastrar seu Evento Cristão? evento@congressocristao.com.br</p>
  <p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
</footer>

</body>
</html>
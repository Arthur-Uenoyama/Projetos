<html>
<head>
 <title>Atualizar Evento</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
 <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
 <link rel="stylesheet" href="css/atualizarevento.css">
</head>
<body class="w3-theme-l5">

<?php

require_once('BancoDeDados.php');

// Supondo que você tenha um ID de perfil
$IDPerfil = 1;

// Consulta SQL para obter o nome da igreja e do perfil
$sql = "SELECT NomeIgreja, NomePerfil, Email, CNPJ FROM perfil WHERE IDPerfil = $IDPerfil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exiba os resultados
    $row = $result->fetch_assoc();
    $NomeIgreja = $row["NomeIgreja"];
    $NomePerfil = $row["NomePerfil"];
    $Email = $row["Email"];
    $CNPJ = $row["CNPJ"];
    echo "Nome da Igreja: " . $NomeIgreja;
    echo "Nome do Perfil: " . $NomePerfil;
    echo "Email: " . $Email;
    echo "CNPJ: " . $CNPJ;
} else {
    echo "Nenhum resultado encontrado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-metro-dark-green w3-left-align w3-large">
  <a href="perfil.php" class="w3-bar-item w3-green w3-button w3-padding-large w3-round"><i class="fa fa-arrow-circle-left w3-margin-right"></i>Voltar</a>
  <div class="w3-dropdown-hover w3-hide-small">
  </div>
 </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Coluna da esquerda -->
    <div class="w3-col m3">
      <!-- Perfil -->
      <div class="w3-card w3-round w3-metro-dark-green">
        <div class="w3-container">
         <h4 class="w3-center">Meu Perfil</h4>
         <p class="w3-center"><img src="img/igreja.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fas fa-church fa-fw w3-margin-right w3-text-white"></i><?php echo $NomeIgreja;?></p>
          <p><i class="fa fa-user w3-margin-right w3-text-white"></i><?php echo $NomePerfil;?></p>
          <p><i class="fa fa-envelope w3-margin-right w3-text-white"></i><?php echo $Email;?></p>
          <p><i class="fa fa-address-card w3-margin-right w3-text-white"></i><?php echo $CNPJ;?></p>
        </div>
      </div>
      <br>
    <!-- Fim da coluna esquerda -->
    </div>


    <div class="w3-col m7">
    <div class="w3-container">
<h2>Atualizar Evento</h2><hr>
<form method="POST" action="atualizareventoAction.php" enctype="multipart/form-data">
  <label class="w3-label"><i class="fas fa-edit"></i> Nome do Evento</label>
    <input class="w3-input" type="text" name="txtNomeEvento" required>

    <label class="w3-label"><i class="fa fa-calendar-alt"></i> Data de Inicio do Evento</label>
    <input class="w3-input" type="date" name="txtDataEvento" required>

    <label class="w3-label"><i class="fa fa-calendar-alt"></i> Data do Fim do Evento</label>
    <input class="w3-input" type="date" name="txtDataFinalEvento" required>

    <label class="w3-label"><i class="fas fa-donate"></i> Valor da Inscrição</label>
    <div class="currency-input-container">
    <span class="currency-symbol">R$</span>
    <input type="text" name="txtValorInscricao" class="input-field" placeholder="Digite o valor" oninput="formatarMoeda(this)">
    </div>

    <label class="w3-label"><i class="fas fa-edit"></i> Nome da Igreja Realizadora </label>
    <input class="w3-input" type="text" name="txtIgrejaRealizadora" required>

    <label class="w3-label"><i class="fas fa-map-marker-alt"></i> Local do Evento</label>
    <input class="w3-input" type="text" name="txtLocalEvento" required>

    <label class="w3-label"><i class="fas fa-map-marker-alt"></i> Local da Igreja</label>
    <input class="w3-input" type="text" name="txtLocalIgreja" required>

    <label class="w3-label"><i class="fas fa-map"></i> Cidade</label>
    <input class="w3-input" type="text" name="txtCidade" required>

    <label class="w3-label"><i class="fa fa-user"></i> Nome do Palestrante</label>
    <input class="w3-input" type="text" name="txtNomePalestrante" required>

    <label class="w3-label"><i class="fas fa-newspaper"></i> Sobre o Palestrante</label>
    <textarea class="w3-input" name="txtSobrePalestrante" required></textarea>

    <label class="w3-label"><i class="fas fa-images"></i> Foto do Palestrante:</label>
    <div class="gallery">
      <input class="w3-input" type="file" name="txtFotoPalestrante" accept="image/*" multiple>
    </div>

  <label class="w3-label"><i class="fas fa-building"></i> Nome do Hotel</label>
    <input class="w3-input" type="text" name="txtNomeHotel" required>

    <label class="w3-label"><i class="fas fa-images"></i> Foto da Logo do Hotel:</label>
    <div class="gallery">
      <input class="w3-input" type="file" name="txtFotoHotel" accept="image/*" multiple>
    </div>

    <label class="w3-label"><i class="fa fa-calendar-alt"></i> Data do Check-in</label>
    <input class="w3-input" type="date" name="txtDataCheckin" required>

    <label class="w3-label"><i class="	far fa-clock"></i> Horário do Check-in</label>
    <input class="w3-input" type="time" name="txtHorarioCheckin" required>

    <label class="w3-label"><i class="fa fa-calendar-alt"></i> Data do Check-out</label>
    <input class="w3-input" type="date" name="txtDataCheckout" required>

    <label class="w3-label"><i class="far fa-clock"></i> Horário do Check-out</label>
    <input class="w3-input" type="time" name="txtHorarioCheckout" required>

    <label class="w3-label"><i class="fas fa-file-invoice"></i> Regulamento</label>
    <textarea class="w3-input" name="txtRegulamento" required></textarea>

    <label class="w3-label"><i class="fas fa-images"></i> Fotos do Local:</label>
    <div class="gallery">
      <input class="w3-input" type="file" name="txtFotosLocal" accept="image/*" multiple>
    </div>

    <label class="w3-label"><i class="fas fa-road"></i>CEP do Evento</label>
    <input class="w3-input" type="text" name="txtCEP" required>

    <label class="w3-label"><i class="fas fa-road"></i>CEP da Igreja</label>
    <input class="w3-input" type="text" name="txtCEP2" required>

    <label class="w3-label"><i class="fas fa-road"></i>Endereço do evento no Google Maps</label>
    <input class="w3-input" type="text" name="txtEnderecoGoogleMaps" required>

    <label class="w3-label"><i class="fas fa-road"></i>Endereço da Igreja no Google Maps</label>
    <input class="w3-input" type="text" name="txtEnderecoGoogleMaps2" required>

  </br>

    <button type="submit" class="w3-button w3-round w3-metro-dark-green"> 
      <i class="w3-large fa fa-download"></i> Cadastrar
    </button>
          
  </form>
</div>
    <!-- Fim da coluna do meio -->
    </div>
  </div>
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-metro-dark-green w3-padding-16">
<img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
	<p>Dúvidas: contato@congressocristao.com.br</p>
	<p>Login: Somente para Eventos</p>
	<p>Quer cadastrar seu Evento Cristão? evento@congressocristao.com.br</p>
	<p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
</footer>


<script src="js/atualizarevento.js"></script>

<body>
</html>
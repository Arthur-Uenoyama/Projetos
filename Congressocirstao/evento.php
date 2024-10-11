<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="icon" href="img/icon.png" type="image/x-icon">
<link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
<link rel="stylesheet" href="css/evento.css">
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
    $query = "SELECT NomeEvento, DataEvento, DataFinalEvento, ValorInscricao, IgrejaRealizadora, LocalEvento, LocalIgreja, Cidade, NomePalestrante, SobrePalestrante, FotoPalestrante, NomeHotel, FotoHotel, DataCheckin, HorarioCheckin, DataCheckout, HorarioCheckout, Regulamento, FotosLocal, CEP, CEP2, EnderecoGoogleMaps, EnderecoGoogleMaps2 FROM criarevento WHERE IDCriarevento = $IDCriarEvento";

    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        // Display the results
        $row = $result->fetch_assoc();
        $NomeEvento = $row['NomeEvento'];
        $DataEvento = $row["DataEvento"];
        $DataFinalEvento = $row["DataFinalEvento"];
        $ValorInscricao = $row["ValorInscricao"];
        $IgrejaRealizadora = $row["IgrejaRealizadora"];
        $LocalEvento = $row["LocalEvento"];
        $LocalIgreja = $row["LocalIgreja"];
        $Cidade = $row["Cidade"];
        $NomePalestrante = $row["NomePalestrante"];
        $SobrePalestrante = $row["SobrePalestrante"];
        $Fotopalestrante = $row["FotoPalestrante"];
        $NomeHotel = $row["NomeHotel"];
        $FotoHotel = $row["FotoHotel"];
        $DataCheckin = $row["DataCheckin"];
        $HorarioCheckin = date("H:i", strtotime($row["HorarioCheckin"]));
        $DataCheckout = $row["DataCheckout"];
        $HorarioCheckout = date("H:i", strtotime($row["HorarioCheckout"]));
        $Regulamento = $row["Regulamento"];
        $FotosLocal = $row["FotosLocal"];
        $CEP = $row["CEP"];
        $CEP2 = $row["CEP2"];
        $EnderecoGoogleMaps = $row["EnderecoGoogleMaps"];
        $EnderecoGoogleMaps2 = $row["EnderecoGoogleMaps"];

        // Formatando a data
        $dataFormatada = date("d", strtotime($DataEvento));
        $dataFinalFormatada = date("d", strtotime($DataFinalEvento));
        $dataCheckinFormatada = date("d/m", strtotime($DataCheckin));
        $dataCheckoutFormatada = date("d/m", strtotime($DataCheckout));
        //Formatando o mes
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
        $mesFormatado = strftime('%B', strtotime($DataEvento));
        $mesFinalFormatado = strftime('%B', strtotime($DataFinalEvento));

        $anoFormatado = date("Y", strtotime($DataEvento));
        $anoFinalFormatado = date("Y", strtotime($DataFinalEvento));

        echo "<title>$Cidade</title>";
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
<nav class="w3-sidebar w3-metro-dark-green w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxlarge w3-text-theme"></h1>
  <button class="w3-bar-item w3-button" onclick="w3_closeSidebar()">Fechar<i class="fa fa-remove"></i></button>
  <a href="congressocristao.php" class="w3-bar-item w3-button"><i class="fa fa-arrow-circle-left"></i> Voltar para pagina inicial</a>
  <a href="inscricaocasal.php" class="w3-bar-item w3-button">Inscrição</a>
  <a id="regulamento-btn" href="#" class="w3-bar-item w3-button">Regulamento</a>
</nav>
<!-- Header -->
<header class="w3-container w3-metro-dark-green w3-padding" id="myHeader">
    <!-- Barra de Pesquisa -->
    <div class="w3-bar-item w3-hide-small w3-round w3-right w3-hover-green">
      <form action="pesquisaAction.php" method="GET">
        <div class="w3-input">
          <input id="searchInput" type="text" name="search" placeholder="Pesquisar Cidade"> 
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>

  <i onclick="w3_openSidebar()" class="fa fa-bars w3-xxxlarge w3-button ww3-metro-dark-green"></i> 
  <div class="w3-center">
  <h4><?php echo $NomeEvento?></h4>
  <h1 class="w3-large w3-animate-bottom"><?php echo $NomeEvento?> em  <?php echo $Cidade?> no
  <?php echo $NomeHotel?> dia 
  <?php echo $dataFormatada?> a <?php echo $dataFinalFormatada?> de <?php echo $mesFormatado?> <?php echo $anoFormatado?>
  </h1>
<h1 class="w3-large w3-animate-bottom">Realização:
<?php echo $IgrejaRealizadora?></h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-green w3-hover-light-grey w3-round" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">Inscreva-se</button>
      <h1 class="w3-medium w3-animate-bottom">Somente para Casais
R$ <?php echo $ValorInscricao?> o casal em 10x</h1>
    </div>
  </div>
</header>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-metro-dark-green"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4></h4>
        <h5><b>Inscrição</b></h5>
      </header>
      <div class="w3-padding">
        <i class="fa fa-warning"></i><p>Saiba que esse evento foi organizado para os casais que possuem interesse em participar e se o casal possuir filhos e desejar levar será cobrado um valor adicional</p>
        <p>Clique nesse botão se deseja participar
        <!-- Codigo a baixo serve para lincar com a pagina de inscrição de casal -->
        <a href="inscricaocasal.php" class="w3-bar-item w3-button">
 <button class="w3-btn w3-round w3-green w3-hover-light-grey" 
        onclick="document.getElementById('id03').style.display='block'" style="font-weight:900;">Quero Participar 
        <i class="fa fa-venus-mars"></i></button>
</a>
      </div>
      <footer class="w3-container w3-metro-dark-green">
        <p></p>
      </footer>
    </div>
</div>


<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
    <h3><?php echo $NomePalestrante?></h3><br>
    <?php if (!empty($Fotopalestrante)) : ?>
      <img src="<?php echo $Fotopalestrante; ?>" class="w3-round" style="width:50%">
    <?php endif; ?>
    <p><?php echo $SobrePalestrante?></p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
    <h3>Hotel</h3><br>
    <?php if (!empty($FotoHotel)) : ?>
      <img src="<?php echo $FotoHotel; ?>" style="width:45%">
    <?php endif; ?>
    <p><?php echo $NomeHotel?></p>
    <p>Check-in <?php echo $dataCheckinFormatada?>, às <?php echo $HorarioCheckin?> horas</p>
    <p>Check-out <?php echo $dataCheckoutFormatada?>, às <?php echo $HorarioCheckout?> horas</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Regulamento</h3><br>
  <img src="img/regulamento.jpg" class="w3-round w3-center" style="width:50%">
  <p></p>
  <button class="w3-btn w3-xlarge w3-green w3-hover-light-grey w3-round" onclick="document.getElementById('id02').style.display='block'" style="font-weight:900;">Visualizar</button>
  </div>
  <p></p>
</div>
</div>
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-metro-dark-green"> 
        <span onclick="document.getElementById('id02').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4></h4>
        <h5><b>Regulamento</b></h5>
      </header>
      <div class="w3-padding">
        <p><?php echo $Regulamento?></p>
      </div>
    </div>
</div>

<h2 class="w3-center">Fotos do local</h2>
<div class="w3-content" style="max-width:800px;position:relative">
  <?php
  // Supondo que $FotosLocal contém os caminhos das imagens separados por vírgula
  $fotosLocalArray = explode(",", $FotosLocal);
  foreach ($fotosLocalArray as $fotoLocal) :
  ?>
    <img class="mySlides w3-animate-opacity w3-round" src="<?php echo $fotoLocal; ?>" style="width:100%">
  <?php endforeach; ?>

  <a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
  <a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>


  
<hr>
<h2 class="w3-center">Quem Somos</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-metro-dark-green w3-button w3-block w3-left-align">Comunidade Cristã de Barretos</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>A Comunidade Cristã de Barretos nasceu fruto de uma igreja já existente nesta cidade desde 1987, formada por um grupo de jovens que decidiram buscar ao Senhor por causa de um desejo de ver esta cidade transformada. Em outubro de 1995, a igreja de Barretos passou a ser coberta pela igreja Comunidade Cristã Vida de São Luiz de Montes Belos. Após alguns anos e mudanças passou a ser chamada Comunidade Cristã de Barretos.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-metro-dark-green w3-button w3-block w3-left-align">Seven Sete Pay Code</button>
<div id="Demo2" class="w3-hide">
  <div class="w3-container">
    <p> teste da seven sete pay code texto para visualaizar o resultado </p> 
  </div>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-metro-dark-green w3-button w3-block w3-left-align"><?php echo $NomePalestrante?></button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <p><?php echo $SobrePalestrante?></p>
  </div>
</div>


<hr>
<h2 class="w3-center">Endereço dos Locais</h2>
<div class="w3-border">
<div class="w3-bar w3-metro-dark-green">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Endereço do Hotel Monte Real')">Endereço do <?php echo $NomeHotel?></button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Endereço da Igreja Presbiteriana')">Endereço da Igreja Presbiteriana </button>
</div>

<div id="Endereço do Hotel Monte Real" class="w3-container city w3-animate-opacity">
  <p><?php echo $LocalEvento?></p>
  <p>CEP: <?php echo $CEP?></p>
  <a href= <?php echo $EnderecoGoogleMaps?>>   Visualizar no Google Maps</a>
</div>

<div id="Endereço da Igreja Presbiteriana" class="w3-container city w3-animate-opacity">
  <p><?php echo $LocalIgreja?></p> 
  <p>CEP: <?php echo $CEP2?></p>
  <a href=<?php echo $EnderecoGoogleMaps2?>>     Visualizar no Google Maps</a>
  </div>
</div>

<footer class="w3-container w3-metro-dark-green w3-padding-16">
  <a href="#myHeader" class="w3-button w3-round w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar ao topo</a>
  <img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
  <p>Login: Somente para Eventos</p>
  <p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">

  <script src="js/evento.js"></script>

</body>
</html>

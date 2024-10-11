<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Meu Perfil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" type="text/css" href="meuperfil.css">
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-teal w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="Fechar">
      <i class="fa fa-remove"></i>
    </a>
  </div>

  <!----Botão para voltar para a página principal----->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a href="congressocristao.php" class="w3-bar-item w3-green w3-button w3-round w3-margin-bottom"><i class="fa fa-arrow-circle-left w3-margin-right"></i>Voltar para o início</a>
      <div class="w3-dropdown-hover w3-hide-small"></div>
    </div>
  </div>

  <!-- Perfil -->
  <div class="w3-card w3-round profile-card">
    <div class="w3-container">
      <h4 class="w3-center">Meu Perfil</h4>
        <p class="w3-center"><img src="img/igreja.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
          <hr>
            <p><i class="fas fa-church fa-fw w3-margin-right w3-text-theme"></i><?php echo $NomeIgreja;?></p>
              <p><i class=" w3-margin-right w3-text-theme"></i><?php echo $NomePerfil;?></p>
    </div>
  </div>
</br>

      <!----Botão para levar para a pagina de cadastro----->
      <h5 class="w3-center">Crie o seu evento clicando aqui no botão abaixo</h5>
      <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
        <a href="criarevento.php" class="w3-bar-item w3-green w3-button w3-padding-large w3-round">Criar Evento</a>
          <div class="w3-dropdown-hover w3-hide-small"></div>
      </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="MeusEventos">
    <a href="#"><img src="img/igreja.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Meus Eventos</b></h1>
    </div>
  </header>
  
  <!-- Mostrar o Evento que o perfil possui cadastrado -->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="aguasdelindoia.php">
        <img src="img/01.jpg" alt="Norway" style="width:100%" class="w3-round w3-hover-opacity">
      </a>
        <div class="w3-container w3-round w3-white">
          <p><b>Águas de Lindóia</b></p>
            <p>Seu evento irá acontecer nos dias 17, 18 e 19 de Novembro de 2023</p>
       </div>
    </div>
  </div>

  <!-- Paginação -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-round w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">»</a>
    </div>
  </div>

  <!-- Footer -->
<footer class="w3-container w3-theme-dark w3-teal w3-padding-16">
<img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
	<p>Dúvidas: contato@congressocristao.com.br</p>
	<p>Login: Somente para Eventos</p>
	<p>Quer cadastrar seu Evento Cristão? evento@congressocristao.com.br</p>
	<p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
</footer>
  
<!-- End page content -->
</div>

<script src="meuperfil.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Congresso Cristão</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="icon" href="img/icon.png" type="image/x-icon">
<link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
<link rel="stylesheet" href="css/congressocristao.css">
<style>
/* Create a Parallax Effect */
.bgimg-1 {
  background-image: url('img/logo.jpg');
  min-height: 80%;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 400px) {
  .bgimg-1 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#inicio" class="w3-bar-item w3-button w3-large w3-round"><i class="fa fa-home"></i> INICIO</a>
    <a href="#sobre" class="w3-bar-item w3-button w3-large w3-round"><i class="fa fa-book"></i> SOBRE</a>
    <a href="#contato" class="w3-bar-item w3-button w3-large w3-round"><i class="fa fa-envelope"></i> CONTATO</a> 
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-round w3-center w3-large"><i class="fa fa-user"></i> LOGIN</button>
    <!-- Barra de Pesquisa -->
    <div class="w3-bar-item w3-hide-small w3-round w3-right w3-hover-green">
      <form action="pesquisaAction.php" method="GET">
        <div class="w3-input">
          <input id="searchInput" type="text" name="search" placeholder="Pesquisar Cidade"> 
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
  </div>
  </div>
  
   <!-- Botão de Login -->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="img/igreja.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
      <form class="w3-container" method="post" action="perfilAction.php">
        <div class="w3-section">
          <label><b>Login apenas para igrejas</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome do perfil" name="txtNomePerfil" required>
          <label><b>Senha</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Digite sua senha" name="txtSenha" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding w3-round" type="submit">Entrar</button>
          <p>Não possui um login? <a href="registrar.php">Registrar</a></p> <!-- Link para registro -->
        </div>
      </form>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-round w3-red">Cancelar</button>
      </div>
    </div>
  </div>

<!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-round w3-right w3-hover-green" onclick="pesquisarEventos()">
        <div class="w3-input">
          <input id="searchInput" type="text" placeholder="Pesquisar Cidade"> <i class="fa fa-search" onclick="pesquisarEventos()"></i>
        </div>
    </a>
  </div>
</div>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="inicio">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small w3-bold">Congresso Cristão</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium w3-bold"></span><br>
    <span class="w3-xxlarge w3-bold">
      Aqui você encontra por eventos cristão<br>que podem estar acontecendo<br>onde você estiver
    </span>
  </div>
</header>

<!-- Sessão do texto sobre o site  -->
<div class="w3-content w3-container w3-padding-64" id="sobre">
  <h3 class="w3-center">Sobre o site</h3>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p></div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contato">
  <h3 class="w3-center">Emails de contato</h3>
  <p class="w3-center w3-large">Você possui alguma duvida ou Quer cadastrar seu Evento Cristão?</p>
  <p class="w3-center">segue abaixo os emails de contato</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-envelope-o w3-xlarge w3-margin-right"> </i> Email: contato@congressocristao.com.br</p>
    <p><i class="fa fa-envelope-o w3-xlarge w3-margin-right"> </i> evento@congressocristao.com.br</p>
    <br>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-metro-dark-green w3-padding-16">
  <a href="#inicio" class="w3-button w3-round w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar ao topo</a>
  <img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
  <p>Login: Somente para Eventos</p>
  <p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">

  </div>
</footer>
 
<script>  window.onscroll = function() {myFunction()};
  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-metro-dark-green";
      } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-metro-dark-green", "");
      }
  }
  
  // Used to toggle the menu on small screens when clicking on the menu button
  function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }
  </script>

</body>
</html>

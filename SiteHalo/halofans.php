<!DOCTYPE html>
<html>
<head>
<title>Halo Fans</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="img/icone.png" type="image/x-icon">
<link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
<style>
body,h1,h2,h3,h4,h5,h6 {font-style: italic;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('img/ring.jpeg');
  min-height: 60%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}

i {font-style: italic;
}

em {
    font-style: normal;
}

.medium-12 em {
    font-style: italic;
}

/* Added animation classes */
@keyframes slideInDown {
    from {
        transform: translateY(-100%);
        visibility: visible;
    }
    to {
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.slideInDown {
    animation-name: slideInDown;
    animation-duration: 1s;
}

.fadeIn {
    animation-name: fadeIn;
    animation-duration: 1s;
}


</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
<div class="w3-bar w3-black w3-card">
         <!-- Logo Image -->
     <div class="w3-bar-item w3-top-left"><ul>
    <img src="img/helmetspartan.png" class="logo-img" alt="Logo" width="32" height="32">
</div>
</ul>

<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </a>
    <a href="#" class="w3-bar-item w3-button w3-text-yellow  w3-hide-small">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-text-yellow  w3-hide-small">Notícias</a>
    <a href="#"class="w3-bar-item w3-button w3-text-yellow  w3-hide-small">Crônicas</a>
    <a href="#" class="w3-bar-item w3-button w3-text-yellow  w3-hide-small">Jogos</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-bar-item w3-padding w3-button w3-text-yellow  w3-hide-small" title="More">Livros e HQs <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button w3-text-yellow  w3-hide-small">Livros</a>
        <a href="#" class="w3-bar-item w3-button w3-text-yellow  w3-hide-small">HQs</a>
        <a href="#" class="w3-bar-item w3-button w3-text-yellow  w3-hide-small">Outros</a>
      </div>
    </div>
       <!-- icones redes socias--->
       <ul>
  <div class="w3-bar-item w3-right">			
  <div class="social-icons" style="">

    </div>
	</div>
</ul> 
    <a href="#" class="w3-bar-item w3-button-gray w3-round w3-hide-small w3-right w3-hover-orange">
    <input id="searchInput" type="text" placeholder="Pesquisar..."><i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container slideInDown" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-text-orange w3-xlarge w3-wide fadeIn w3-round">HALO <span class="w3-hide-small"></span> FÃS</span>
  </div>
</div>

<!-- Conteúdo do site -->

<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
    <hr style="width:150px;border:5px solid orange" class="w3-round">
</div>

<!-- Cards -->
<div class="w3-row">
    <!-- Primeiro Card --->
    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/SpartanMorrem.png" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <hr style="width:50px;border:5px solid orange" class="w3-round">    
                <h2>Spartans deveriam morrer: o estoicismo em Halo 4</h2>
                <h3>Introdução</h3>
                <p>"Spartans não morrem", diz o ditado popular....</p>
            </div>
        </div>
    </div>

    <!-- Segundo card -->
    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/halotvshow.jpg" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h3>CRÍTICA – Mais concisa, Segunda Temporada de Halo aposta em tom sombrio e ainda consegue ser mais cativante que a Primeira Temporada</h3>
                <p>A Halo Project Brasil recebeu da Paramount o acesso antecipado aos 4 primeiros episódios da nova temporada de Halo, que retorna....</p>
            </div>
        </div>
        
        <!-- Terceiro card -->
        <div class="w3-card w3-round" style="position:relative; margin-top: 20px; width: 60%;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/FuncionamentoHalos.png" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h3>Como, fisicamente, funcionam os Halos?</h3>
                <p>Introdução</p>
            </div>
        </div>
    </div>
</div>
<hr style="width: 90%; margin: 20px auto; border: 1px solid orange;">


<!-- Últimas Notícias -->
<div class="w3-container" style="margin-top:80px">
    <h1 style="color: black;"><i class="fa fa-bullhorn"></i> Últimas Notícias</h1>
    <hr style="width:150px;border:5px solid orange" class="w3-round">
</div>

<!-- Cards lado a lado -->
<div class="w3-row">
    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/83564-halo-games-hd-4k-artstation (1).jpg" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h2>teste</h2>
                <h3>teste</h3>
                <p>teste</p>
            </div>
        </div>
    </div>

    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/a99706a6-e1a9-4249-80ee-55c586d13406.jpg" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h3>teste</h3>
                <p>teste</p>
            </div>
        </div>
    </div>
</div>

<hr style="width: 90%; margin: 20px auto; border: 1px solid orange;">

<!-- Halo, o Universo e Tudo Mais -->
<div class="w3-container" style="margin-top:80px">
    <h1 style="color: black;"><i class="fa fa-compass"></i> Halo, o Universo e Tudo Mais</h1>
    <hr style="width:150px;border:5px solid orange" class="w3-round">
</div>

<!-- Cards lado a lado -->
<div class="w3-row">
    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/83564-halo-games-hd-4k-artstation (1).jpg" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h2>teste</h2>
                <h3>teste</h3>
                <p>teste</p>
            </div>
        </div>
    </div>

    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/a99706a6-e1a9-4249-80ee-55c586d13406.jpg" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h3>teste</h3>
                <p>teste</p>
            </div>
        </div>
    </div>
</div>

<hr style="width: 90%; margin: 20px auto; border: 1px solid orange;">

<!-- Comunidade -->
<div class="w3-container" style="margin-top:80px">
    <h1 style="color: black;"><i class="fa fa-users"></i> Comunidade</h1>
    <hr style="width:150px;border:5px solid orange" class="w3-round">
</div>

<!-- Cards lado a lado -->
<div class="w3-row">
    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/83564-halo-games-hd-4k-artstation (1).jpg" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h2>teste</h2>
                <h3>teste</h3>
                <p>teste</p>
            </div>
        </div>
    </div>

    <div class="w3-half w3-container w3-margin-bottom" style="position:relative;">
        <div class="w3-card w3-round" style="position:relative;">
            <img class="mySlides w3-animate-opacity w3-round" src="img/a99706a6-e1a9-4249-80ee-55c586d13406.jpg" style="width:100%;">
            <div class="text-overlay" style="position:absolute; top:50%; left:10%; transform: translateY(-50%); text-align:left; color:white;">
                <h3>teste</h3>
                <p>teste</p>
            </div>
        </div>
    </div>
</div>

<hr style="width: 90%; margin: 20px auto; border: 1px solid orange;">

<br> 
<br>
<!-- Footer -->
<footer class="w3-container w3-gray w3-padding-16">
  <h2><i class="fas fas-info"></i>Licença e Termos de Uso</h2>
			<p>Halo© Microsoft Corporation. Halo Project Brasil was created under Microsoft's <a href="http://www.xbox.com/en-US/developers/rules">"Game Content Usage Rules"</a> using assets from Halo.</p>
			<p><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Halo Project Brasil</span>
			<a xmlns:cc="http://creativecommons.org/ns#" href="http://www.haloprojectbrasil.com.br" property="cc:attributionName" rel="cc:attributionURL">http://www.haloprojectbrasil.com.br</a> está licenciado com uma Licença <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons - Atribuição-NãoComercial-CompartilhaIgual 4.0 Internacional</a>.</p>
            <br>
  </div>
</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
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

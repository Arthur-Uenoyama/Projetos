<!DOCTYPE html>
<html>
<head>
<title>Kawasaki Ninja H2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/NinjaH2.css">
</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons and menu items -->
<div class="w3-bar w3-green w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fab fa-creative-commons-by"></i> MY KAWASAKI</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i> CART (0)</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fas fa-shopping-bag"></i> WISHLIST</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-motorcycle"></i> TEST RIDE</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-map-marker"></i> LOCATE A DEALER</a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-48 w3-white">
  <h1 class="w3-xxxlarge">
    <b><span class="kawasaki-text">KAWASAKI <span class="ninja-text">NINJA</span> <span class="h-text">H</span><span class="number-text">2</span></b>
  </h1>
  <h6>Welcome to the world of <span class="w3-tag w3-round">Kawasaki</span> the world of adrenaline</h6>
</header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="img/ninjah2.jpg" alt="Kawasaki Ninja H2" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Kawasaki</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>NINJA H2</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('comprar').style.display='block'">COMPRAR</button></h6>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
    <div class="container">
        <h1>Kawasaki Ninja H2</h1>
        <div class="description">
            <p>A Kawasaki Ninja H2 é uma moto de alta performance, conhecida por seu design agressivo e tecnologia avançada. 
            É uma das motos mais rápidas do mundo, equipada com um motor sobrealimentado que oferece uma experiência de pilotagem inigualável.</p>
        </div>
        <div class="specs">
            <h2>Especificações Técnicas</h2>
            <ul>
                <li><strong>Motor:</strong> 998 cm³, 4 tempos, 4 cilindros em linha</li>
                <li><strong>Potência:</strong> 231 cv a 11.500 rpm</li>
                <li><strong>Torque:</strong> 141,7 Nm a 11.000 rpm</li>
                <li><strong>Peso:</strong> 238 kg</li>
                <li><strong>Velocidade Máxima:</strong> Acima de 300 km/h</li>
            </ul>
        </div>
      
      <!-- Play Engine Sound Button -->
      <div class="w3-container w3-margin">
        <button class="w3-button w3-black" onclick="playEngineSound()"><i class="fa fa-motorcycle"></i> Play Engine Sound</button>
        <audio id="engineSound" src="audio/ninja-h2-engine.mp3"></audio>
      </div>
      
     <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Galeria</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
            <p><img src="/w3images/jeans.jpg" alt="Jeans" style="width:100%"></p>
            <p><img src="/w3images/team1.jpg" alt="Jeans" style="width:100%"></p>
          </div>
          <div class="w3-col s6">
            <p><img src="/w3images/avatar_hat.jpg" alt="Men in Hats" style="width:100%" class="w3-grayscale"></p>
            <p><img src="/w3images/team4.jpg" alt="Jeans" style="width:100%"></p>
         </div>
        </div>
      </div>
      <hr>
      
  

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
<div class="w3-center">
    <div class="w3-col l3 s6">
      <h4>ABOUT KAWASAKI</h4>
      <ul>
        <li><a href="#">Kawasaki History</a></li>
        <li><a href="#">Kawasaki Companies</a></li>
        <li><a href="#">International Sites</a></li>
        <li><a href="#">Kawasaki Technology</a></li>
        <li><a href="#">Legal Policies</a></li>
        <li><a href="#">Corporate Careers</a></li>
        <li><a href="#">Manufacturing Careers</a></li>
        <li><a href="#">Transparency In Coverage</a></li>
      </ul>
    </div>
    <div class="w3-col l3 s6">
      <h4>RESOURCES</h4>
      <ul>
        <li><a href="#">Corporate Contact Info</a></li>
        <li><a href="#">Kawasaki Support</a></li>
        <li><a href="#">Safety Resources</a></li>
        <li><a href="#">Racing Contingency</a></li>
        <li><a href="#">Industry Links</a></li>
        <li><a href="#">E-Commerce Help Center</a></li>
      </ul>
    </div>
    <div class="w3-col l3 s6">
      <h4>STAY CONNECTED</h4>
      <p>Receive the latest news, special offers and exclusives.</p>
      <button class="w3-button w3-white w3-padding-large w3-large">SUBSCRIBE</button>
      <p><a href="#">Manage Subscription Preferences</a></p>
    </div>
    <div class="w3-col l3 s6">
      <h4>NEWS</h4>
      <ul>
        <li><a href="#">Awards & Reviews</a></li>
        <li><a href="#">Press Releases</a></li>
        <li><a href="#">Recalls</a></li>
        <li><a href="#">Events</a></li>
      </ul>
      <h4>DEALER INFO</h4>
      <ul>
        <li><a href="#">Dealer Locator</a></li>
        <li><a href="#">Become a Dealer</a></li>
      </ul>
    </div>
  </div>
  </div>
</footer>


<script src="js/NinjaH2.js" defer></script>

</body>
</html>

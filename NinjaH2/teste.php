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
<link rel="stylesheet" href="css/NinjaH2.css">
</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons and menu items -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button">MY KAWASAKI</a>
  <a href="#" class="w3-bar-item w3-button">CART (0)</a>
  <a href="#" class="w3-bar-item w3-button">WISHLIST</a>
  <a href="#" class="w3-bar-item w3-button">TEST RIDE</a>
  <a href="#" class="w3-bar-item w3-button">LOCATE A DEALER</a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-pinterest-p"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-facebook-official"></i></a>
</div>

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>KAWASAKI NINJA H2</b></h1>
    <h6>Welcome to the world of <span class="w3-tag">Kawasaki</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="img/ninjah2.jpg" alt="Kawasaki Ninja H2" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Kawasaki</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>NINJA H2</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
    <div class="container">
        <h1>Kawasaki Ninja H2</h1>
        <div class="bike-image">
            <img src="img/ninjah2.jpg" alt="Kawasaki Ninja H2">
        </div>
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
    </div>
      
      <!-- Follow Me -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
          <p><button class="w3-button w3-block w3-black">Subscribe</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").addEventListener("click", function() {
  var x = document.getElementById("demo1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
});

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "<i class='fa fa-thumbs-up'></i> Liked";
}
</script>

</body>
</html>

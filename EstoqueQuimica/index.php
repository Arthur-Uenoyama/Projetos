<!DOCTYPE html>
<html lang="en">
<head>
<title>Estoque Química</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/EstoqueQuimica.css">
<link rel="icon" href="img/frascoicone.png" type="image/x-icon">
<style>
body, h1, h2, h3, h4, h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

body { 
    background-image: url('img/wallpaperQuimica.png'); 
    background-size: cover; 
    background-attachment: fixed; 
    background-position: center; 
    color: #ffffff; 
    display: flex;
    flex-direction: column;
    min-height: 100vh; 
}
.container {
    flex: 1; 
}
footer {
    background-color: #6f42c1; 
    color: #fff;
    text-align: center;
    padding: 20px;
    margin-top: auto; 
}
footer .social-icons i {
    margin-right: 10px;
    cursor: pointer;
}

.btn-primary {
    background-color: #6f42c1;
    border-color: #6f42c1;
    border-radius: 50px; 
}

.btn-primary:hover {
    background-color: #5a31a5;
    border-color: #5a31a5;
    border-radius: 50px;
}

.w3-sidebar {
    background-color: #6f42c1 !important;
}

.w3-bar-item {
    color: #fff !important;
}

.w3-button {
    color: #fff !important;
}

.w3-jumbo, .w3-xxxlarge, .w3-center {
    color: #6f42c1 !important;
}

.w3-text-purple {
    color: #6f42c1 !important;
}

.w3-round {
    border-color: #6f42c1 !important;
}

hr {
    border-top: 5px solid #6f42c1;
}
.w3-light-grey {
    background-color: #6f42c1 !important;
    color: white !important;
}

.w3-light-grey p {
    color: white !important;
}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-purple w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Estoque<br>Quimica </b><i class="fas fa-flask"></i></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button-round w3-hover-white"><i class="fas fa-home"></i> Início</a> 
    <a href="EstoqueMaterial.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-cogs"></i> Estoque Material</a> 
    <a href="EstoqueUtensilio.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-flask"></i> Estoque Utensílio</a> 
  </div>
</nav>

<!-- Main content -->
<div class="container w3-main" style="margin-left:340px;margin-right:40px">
  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Sobre o Estoque</b></h1>
    <b><em><span style="color: yellow;">Gerenciamento de materiais e utensílios dos Laboratórios</span></em></b>
    <p><span style="color: yellow;">Este sistema foi desenvolvido para gerenciar e controlar o estoque de materiais e utensílios dos laboratórios de química e multidisciplinar, garantindo a organização e rastreabilidade dos itens.</span></p>
    <hr style="width:50px;border:5px solid #6f42c1" class="w3-round">
  </div>

  
  <!-- Add Materials Links -->
  <div class="container">
    <a href="AdicionarMaterial.php" class="btn btn-primary mb-3">Adicionar Material</a>
    <a href="AdicionarUtensilio.php" class="btn btn-primary mb-3">Adicionar Utensílio</a>
  </div>
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
  <p class="w3-center">© Estoque Química 2024</p>
  <p class="w3-center">ETEC Coronel Raphael Brandão - Barretos/SP : Centro Paula Souza</p>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>

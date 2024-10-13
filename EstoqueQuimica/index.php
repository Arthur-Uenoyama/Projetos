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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/EstoqueQuimica.css">
<link rel="icon" href="img/icone.png" type="image/x-icon">
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

.custom-jumbo {
    background-color: #6f42c1;
    color: white !important; 
    border-radius: 50px;
    padding: 20px 20px; 
    font-size: 60px; /
    text-align: left; 
    width: fit-content; 
    margin-top: 10px;
}

@keyframes zoomOut {
    0% {
      transform: scale(1);
    }
    100% {
      transform: scale(0);
    }
  }

  .zoom-out {
    animation: zoomOut 0.5s forwards;
  }

  .btn:hover {
            background-color: #6c757d !important; 
            border-color: #6c757d !important; 
        }
</style>
</head>
<body>
<nav class="w3-sidebar w3-purple w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <img src="img/EtecLogo1.png" alt="Logo" style="width:200px; height:auto; display:block; margin-left: 2px;">
    <h3 class="w3-padding-64"><b>Estoque<br>Química </b><i class="fas fa-flask"></i></h3>
  </div>
  <div class="w3-bar-block">
    <a href="EstoqueMaterial.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-cogs"></i> Estoque Material</a> 
    <a href="EstoqueUtensilio.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class='fas fa-vials'></i> Estoque Utensílio</a>
    <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-info-circle"></i> Sobre o site
    </a> 
  </div>
</nav>
<br>
<div class="container w3-main" style="margin-left:300px;margin-right:20px">
<hr style="width:1020px;border:4px solid #6f42c1" class="w3-round">
  <div class="w3-container" style="margin-top:40px" id="showcase">
    <h1 class="custom-jumbo"><b>Estoque Laboratórios<br>Química e Multidisciplinar</b></h1>
    <br>
    <hr style="width:1000px;border:4px solid #6f42c1" class="w3-round">
  </div>
  <br>
  <div class="container">
    <a href="AdicionarMaterial.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Adicionar Material</a>
    <a href="AdicionarUtensilio.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Adicionar Utensílio</a>
  </div>
</div>
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px; position:relative;">
  <p class="w3-center">© Estoque Química 2024</p>
  <p class="w3-center">ETEC Coronel Raphael Brandão - Barretos/SP | Centro Paula Souza</p>
  <img src="img/TiLogo1.png" alt="Logo" style="position:absolute; right:20px; top:50%; transform: translateY(-50%); width:80px;">
</div>
<div id="id01" class="w3-modal">
  <div id="modal-content" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:800px; border-radius: 15px; overflow: hidden;">
    <div class="w3-container w3-padding-16 w3-light-grey">
      <button onclick="closeModal()" type="button" class="w3-button w3-right w3-round w3-red">Fechar X</button>
    </div>
    <div class="w3-center">
      <img src="img/icone.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
    </div>
    <div class="w3-center w3-padding-16">
      <p style="color: black; font-size: 14px; max-width: 80%; margin: 0 auto;">Nesse sistema gerencia os materiais e utensílios dos laboratórios de Química e Multidisciplinar, desde produtos químicos até ferramentas, 
        garantindo que os laboratórios da ETEC de Barretos esteja sempre abastecido para as aulas práticas, reduzindo desperdícios e aumentando a produtividade.</p>
    </div>
    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
    </div>
  </div>
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

function closeModal() {
    var modalContent = document.getElementById('modal-content');
    modalContent.classList.add('zoom-out');
    setTimeout(function() {
      document.getElementById('id01').style.display = 'none';
      modalContent.classList.remove('zoom-out'); 
    }, 400);
  }

</script>

</body>
</html>

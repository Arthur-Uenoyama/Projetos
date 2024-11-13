<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Two Wheels Lovers</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/Moto.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Two Wheels Lovers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Cart (0)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Wishlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Test Ride</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Locate a Dealer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <header class="text-center mb-5">
    <h1 class="display-3"><b>Two Wheels Lovers</b></h1>
    <p>Welcome to the world of <span class="badge badge-success">Bikes Lovers</span></p>
  </header>

  <header class="w3-display-container w3-round w3-wide">
    <img class="img-fluid" src="img/ninjah2.jpg" alt="Kawasaki Ninja H2">
  </header>

  <div class="row my-5">
    <div class="col-lg-8 col-md-12">
      <div class="bike-image">
       <!-- <img src="img/ninjah2.jpg" alt="Kawasaki Ninja H2" class="img-fluid"> -->
      </div>
      <div class="description mt-4">
        <p>A Kawasaki Ninja H2 é uma moto de alta performance, conhecida por seu design agressivo e tecnologia avançada. 
        É uma das motos mais rápidas do mundo, equipada com um motor sobrealimentado que oferece uma experiência de pilotagem inigualável.</p>
      </div>
      <div class="specs">
        <h3>Especificações Técnicas</h3>
        <ul>
          <li><strong>Motor:</strong> 998 cm³, 4 tempos, 4 cilindros em linha</li>
          <li><strong>Potência:</strong> 231 cv a 11.500 rpm</li>
          <li><strong>Torque:</strong> 141,7 Nm a 11.000 rpm</li>
          <li><strong>Peso:</strong> 238 kg</li>
          <li><strong>Velocidade Máxima:</strong> Acima de 300 km/h</li>
        </ul>
      </div>

      <button id="startEngineBtn" class="btn btn-success mt-4">Ligar Motor</button>
      <audio id="motorSound" src="audio/motor.mp3" preload="auto"></audio>
    </div>
  </div>
</div>

<footer class="bg-dark text-white py-3 mt-5">
  <div class="container text-center">
    <p class="mt-3">Teste</a></p>
  </div>
</footer>
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" placeholder="Search...">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Search</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  document.getElementById('startEngineBtn').addEventListener('click', function() {
    var motorSound = document.getElementById('motorSound');
    if (motorSound.paused) {
      motorSound.play(); 
      this.innerHTML = 'Desligar Motor'; 
    } else {
      motorSound.pause(); 
      motorSound.currentTime = 0;
      this.innerHTML = 'Ligar Motor';
    }
  });
</script>

</body>
</html>

<?php include('dbHotel.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Hotel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#reservation-form">Reservar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center">Bem-vindo ao Hotel</h1>
    <p class="text-center">Reserve seu quarto de forma simples e rápida.</p>
    <a href="index.php#reservation-form" class="btn btn-primary d-block mx-auto">Faça sua Reserva</a>
    
    <!-- Formulário de Reserva -->
    <div id="reservation-form" class="mt-5">
        <h2>Faça sua Reserva</h2>
        <form action="reservation.php" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" required>
                <div class="invalid-feedback">Por favor, insira seu nome.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <div class="invalid-feedback">Por favor, insira um email válido.</div>
            </div>
            <div class="mb-3">
                <label for="check_in" class="form-label">Data de Check-in:</label>
                <input type="date" class="form-control" name="check_in" id="check_in" required>
            </div>
            <div class="mb-3">
                <label for="check_out" class="form-label">Data de Check-out:</label>
                <input type="date" class="form-control" name="check_out" id="check_out" required>
            </div>
            <div class="mb-3">
                <label for="room_type" class="form-label">Tipo de Quarto:</label>
                <select class="form-select" name="room_type" id="room_type">
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2025 Hotel. Todos os direitos reservados.</p>
    <p><a href="mailto:contato@hotel.com" class="text-white">contato@hotel.com</a></p>
</footer>

<!-- Bootstrap JS e validação do formulário -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    // Validação do formulário no cliente
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })();
</script>
</body>
</html>

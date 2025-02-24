<?php include('dbHotel.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Reserva de Hotel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-red { background-color: red !important; }
        .container { max-width: 600px; margin-top: 50px; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg w3-red">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-white" href="index.php">Início</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#reservation-form">Reservar</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Formulário de Reserva -->
<div class="container">
    <h2 class="text-center">Faça sua Reserva</h2>
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
        <button type="submit" class="btn btn-primary w-100">Reservar</button>
    </form>
</div>

<!-- Footer -->
<footer class="w3-red text-white text-center py-3 mt-5">
    <p>&copy; 2025 Hotel. Todos os direitos reservados.</p>
    <p><a href="mailto:contato@hotel.com" class="text-white">contato@hotel.com</a></p>
</footer>

<!-- Bootstrap JS e validação do formulário -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    (function() {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

</body>
</html>

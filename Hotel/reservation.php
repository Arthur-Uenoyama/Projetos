<?php
include('dbHotel.php');

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $room_type = $_POST['room_type'];

    $stmt = $pdo->prepare("INSERT INTO reservas (nome, email, data_checkin, data_checkout, room_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $check_in, $check_out, $room_type]);

    $message = '<div class="alert alert-success text-center" role="alert">Reserva realizada com sucesso!</div>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Hotel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .message-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh; /* Ajuste para centralizar a mensagem sem afetar a navbar */
        }
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

<!-- Mensagem de sucesso -->
<?php if ($message): ?>
    <div class="container message-container">
        <div class="col-md-6 mx-auto">
            <?= $message ?>
        </div>
    </div>
<?php endif; ?>

<!-- Footer -->
<footer class="w3-red text-white text-center py-3 mt-5">
    <p>&copy; 2025 Hotel. Todos os direitos reservados.</p>
    <p><a href="mailto:contato@hotel.com" class="text-white">contato@hotel.com</a></p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

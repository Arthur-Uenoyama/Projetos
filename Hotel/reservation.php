<?php
include('dbHotel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $room_type = $_POST['room_type'];

    $stmt = $pdo->prepare("INSERT INTO reservas (nome, email, data_checkin, data_checkout, room_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $check_in, $check_out, $room_type]);

    echo '<div class="container mt-5"><div class="alert alert-success" role="alert">Reserva realizada com sucesso!</div></div>';
}
?>

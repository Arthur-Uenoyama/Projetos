<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
	<title>Atualização - MYSQLI</title>
</head>
<body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "congressocristao";
        $conexao = new mysqli($servername, $username, $password, $dbname);
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        } 

        $enderecoGoogleMaps = $_POST['txtEnderecoGoogleMaps'];
$EnderecoGoogleMaps2 = $_POST['txtEnderecoGoogleMaps2'];

$sql = "UPDATE criarevento SET 
    NomeEvento = '".$_POST['txtNomeEvento']."',
    DataEvento = '".$_POST['txtDataEvento']."',
    DataFinalEvento = '".$_POST['txtDataFinalEvento']."',
    ValorInscricao = '".$_POST['txtValorInscricao']."',
    IgrejaRealizadora = '".$_POST['txtIgrejaRealizadora']."',
    LocalEvento = '".$_POST['txtLocalEvento']."',
    LocalIgreja = '".$_POST['txtLocalIgreja']."',
    Cidade = '".$_POST['txtCidade']."',
    NomePalestrante = '".$_POST['txtNomePalestrante']."',
    SobrePalestrante = '".$_POST['txtSobrePalestrante']."',
    FotoPalestrante = '".$_POST['txtFotoPalestrante']."',
    NomeHotel = '".$_POST['txtNomeHotel']."',
    FotoHotel = '".$_POST['txtFotoHotel']."',
    DataCheckin = '".$_POST['txtDataCheckin']."',
    HorarioCheckin = '".$_POST['txtHorarioCheckin']."',
    DataCheckout = '".$_POST['txtDataCheckout']."',
    HorarioCheckout = '".$_POST['txtHorarioCheckout']."',
    Regulamento = '".$_POST['txtRegulamento']."',
    FotosLocal = '".$_POST['txtFotosLocal']."',
    CEP = '".$_POST['txtCEP']."',
    CEP2 = '".$_POST['txtCEP2']."',
    EnderecoGoogleMaps = '".$enderecoGoogleMaps."',
    EnderecoGoogleMaps2 = '".$EnderecoGoogleMaps2."'";

if ($conexao->query($sql) === TRUE) {
    echo '
    <a href="perfil.php">
        <h1 class="w3-button w3-teal">Evento Atualizado com sucesso! </h1>
    </a>';
    $id = mysqli_insert_id($conexao);
} else {
    echo '
    <a href="atualizarevento.php">
        <h1 class="w3-button w3-teal">ERRO! </h1>
    </a>';
}
$conexao->close();

    ?>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Criar evento</title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "congressocristao";
    $conexao = new mysqli($servername, $username, $password, $dbname);
    
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    } 
    
    function uploadImage($fileInputName, $conexao, $maxFileSizeMB = 20, $customName = null)
    {
        if (isset($_FILES[$fileInputName])) {
            $maxFileSizeBytes = $maxFileSizeMB * 1024 * 1024; // Convertendo para bytes

            // Verifica se o tamanho do arquivo está dentro do limite
            if ($_FILES[$fileInputName]['size'] > $maxFileSizeBytes) {
                echo '<div class="alert alert-danger" role="alert" align="center">
                    Tamanho do arquivo excede o limite de ' . $maxFileSizeMB . ' MB. Por favor, escolha um arquivo menor.
                    </div>';
                return '';
            }

            $originalFileName = $_FILES[$fileInputName]['name'];
            $ext = strtolower(substr($originalFileName, -4)); // Pegando extensão do arquivo
            $new_name = $customName ? $customName . $ext : $originalFileName; // Nome personalizado ou original
            $dir = './img/'; // Diretório para uploads

            move_uploaded_file($_FILES[$fileInputName]['tmp_name'], $dir . $new_name); // Fazer upload do arquivo

            $caminhoDaImagem = $conexao->real_escape_string($dir . $new_name);
            
            echo '<div class="alert alert-success" role="alert" align="center">
                <img src="./img/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
                <br>
                Imagem enviada com sucesso!
                <br>
                <a href="perfil.php">
                <button class="btn btn-default">Enviar nova imagem</button>
                </a></div>';

            return $caminhoDaImagem;
        } else {
            echo '<div class="alert alert-danger" role="alert" align="center">
                Erro ao enviar a imagem. Por favor, tente novamente.
                </div>';
            return ''; // Retorna uma string vazia se não houver imagem
        }
    }

    $NomeEvento = isset($_POST['txtNomeEvento']) ? $_POST['txtNomeEvento'] : '';
    $DataEvento = isset($_POST['txtDataEvento']) ? $_POST['txtDataEvento'] : '';
    $DataFinalEvento = isset($_POST['txtDataFinalEvento']) ? $_POST['txtDataFinalEvento'] : '';
    $ValorInscricao = isset($_POST['txtValorInscricao']) ? $_POST['txtValorInscricao'] : '';
    $NomeIgreja = isset($_POST['txtIgrejaRealizadora']) ? $_POST['txtIgrejaRealizadora'] : '';
    $LocalEvento = isset($_POST['txtLocalEvento']) ? $_POST['txtLocalEvento'] : '';
    $LocalIgreja = isset($_POST['txtLocalIgreja']) ? $_POST['txtLocalIgreja'] : '';
    $Cidade = isset($_POST['txtCidade']) ? $_POST['txtCidade'] : '';
    $NomePalestrante = isset($_POST['txtNomePalestrante']) ? $_POST['txtNomePalestrante'] : '';
    $SobrePalestrante = isset($_POST['txtSobrePalestrante']) ? $_POST['txtSobrePalestrante'] : '';
    $NomeHotel = isset($_POST['txtNomeHotel']) ? $_POST['txtNomeHotel'] : '';
    $DataCheckin = isset($_POST['txtDataCheckin']) ? $_POST['txtDataCheckin'] : '';
    $HorarioCheckin = isset($_POST['txtHorarioCheckin']) ? $_POST['txtHorarioCheckin'] : '';
    $DataCheckout = isset($_POST['txtDataCheckout']) ? $_POST['txtDataCheckout'] : '';
    $HorarioCheckout = isset($_POST['txtHorarioCheckout']) ? $_POST['txtHorarioCheckout'] : '';
    $Regulamento = isset($_POST['txtRegulamento']) ? $_POST['txtRegulamento'] : '';
    $CEP = isset($_POST['txtCEP']) ? $_POST['txtCEP'] : '';
    $CEP2 = isset($_POST['txtCEP2']) ? $_POST['txtCEP2'] : '';
    $EnderecoGoogleMaps = isset($_POST['txtEnderecoGoogleMaps']) ? $_POST['txtEnderecoGoogleMaps'] : '';
    $EnderecoGoogleMaps2 = isset($_POST['txtEnderecoGoogleMaps2']) ? $_POST['txtEnderecoGoogleMaps2'] : '';

    $FotoPalestrante = uploadImage('txtFotoPalestrante', $conexao);
    $FotoHotel = uploadImage('txtFotoHotel', $conexao);
    $FotosLocal = uploadImage('txtFotosLocal', $conexao);

    $sql = "INSERT INTO criarevento (NomeEvento, DataEvento, DataFinalEvento, ValorInscricao, IgrejaRealizadora, LocalEvento, LocalIgreja, Cidade, NomePalestrante, SobrePalestrante, FotoPalestrante, NomeHotel, FotoHotel, DataCheckin, HorarioCheckin, DataCheckout, HorarioCheckout, Regulamento, FotosLocal, CEP, CEP2, EnderecoGoogleMaps, EnderecoGoogleMaps2)
    VALUES ('$NomeEvento', '$DataEvento', '$DataFinalEvento', '$ValorInscricao', '$NomeIgreja', '$LocalEvento', '$LocalIgreja', '$Cidade', '$NomePalestrante', '$SobrePalestrante', '$FotoPalestrante', '$NomeHotel', '$FotoHotel', '$DataCheckin', '$HorarioCheckin', '$DataCheckout', '$HorarioCheckout', '$Regulamento', '$FotosLocal', '$CEP', '$CEP2', '$EnderecoGoogleMaps', '$EnderecoGoogleMaps2')";

ini_set('post_max_size', '64M'); // Ajuste o valor conforme necessário para imagens 4K
ini_set('upload_max_filesize', '64M'); // Ajuste o valor conforme necessário para imagens 4K

    date_default_timezone_set('America/Sao_Paulo'); // Definindo o fuso horário

    if ($conexao->query($sql) === TRUE) {
        echo '
        <a href="perfil.php">
            <h1 class="w3-button w3-teal">Evento cadastrado com sucesso! </h1>
        </a> 
        ';
    } else {
        echo '
        <a href="criarevento.php">
            <h1 class="w3-button w3-teal">ERRO! </h1>
        </a> 
        ';
    }

    $conexao->close();
}
?>

    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Inscrição para o Evento</title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "congressocristao";
        $conexao = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        } 

        
        $sql1 = "INSERT INTO inscricaocasal (NomeMarido, CPFMarido, NomeEsposa, CPFEsposa, DataCasamento, CEPEndereco)
        VALUES ('".$_POST['txtNomeMarido']."','".$_POST['txtCPFMarido']."','".$_POST['txtNomeEsposa']."','".$_POST['txtCPFEsposa']."','".$_POST['txtDataCasamento']."','".$_POST['txtCEPEndereco']."')";

        $sql2 = "INSERT INTO crianca (Crianca0a12, Crianca13a17, NomeCrianca, CPFCrianca, DataNascimento)
        VALUES ('".$_POST['txtCrianca0a12']."','".$_POST['txtCrianca13a17']."','".$_POST['txtNomeCrianca']."','".$_POST['txtCPFCrianca']."','".$_POST['txtDataNascimento']."')";

        if ($conexao->query($sql1) === TRUE && $conexao->query($sql2) === TRUE) {
            // Redireciona para a página de pagamento
            header("Location: pacotecasal.php");
            exit();
        } else {
            echo '
            <a href="inscricaocasal.php">
                <h1 class="w3-button w3-teal">ERRO! </h1>
            </a> 
            ';
        }

        // Close the database connection
        $conexao->close();
        ?>
    </div>
</body>
</html>

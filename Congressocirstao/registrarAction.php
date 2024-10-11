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
    <title>Registrar-se</title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "congressocristao";
        $conexao = new mysqli($servername, $username, $password, $dbname);

        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        } 

        $sql = "INSERT INTO perfil (NomeIgreja, NomePerfil, CNPJ, Email, Senha, ConfirmarSenha)
        VALUES ('".$_POST['txtNomeIgreja']."', '".$_POST['txtNomePerfil']."', '".$_POST['txtCNPJ']."', '".$_POST['txtEmail']."', '".$_POST['txtSenha']."', '".$_POST['txtConfirmarSenha']."')";
        
        if ($conexao->query($sql) === TRUE) {
            // Redireciona para a página de perfil
            header("Location: perfil.php?nome=" . urlencode($_POST['txtNomePerfil']));
            exit();
        } else {
            echo '
            <a href="registrar.php">
                <h1 class="w3-button w3-teal">ERRO! </h1>
            </a> 
            ';
        }

        $conexao->close();
        ?>
    </div>
</body>
</html>

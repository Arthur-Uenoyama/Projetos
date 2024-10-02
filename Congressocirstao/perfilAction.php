<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title></title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php

        // Conecte-se ao banco de dados
        $conn = new mysqli("localhost", "root", "usbw", "congressocristao");

        // Verifique se houve algum erro na conexão
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $conn->set_charset("utf8"); // Defina o conjunto de caracteres após a conexão

        // Verifique se o usuário está logado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Obter as credenciais do usuário
            $NomePerfil = $_POST["txtNomePerfil"];
            $Senha = $_POST["txtSenha"];

            // Verificar as credenciais do usuário
            $sql = "SELECT * FROM perfil WHERE NomePerfil= '$NomePerfil' AND Senha = '$Senha'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                // O usuário está logado
                session_start();
                $_SESSION["txtNomePerfil"] = $NomePerfil;

                // Redirecione o usuário para a página principal
                header("Location: teste.php");
            } else {
                // Exibe a mensagem de login inválido
                echo '
                <a href="congressocristao.php">
                    <h1 class="w3-button w3-teal">Login Inválido! </h1>
                </a>
                ';
            }
        }

        ?>

    </div>
</body>
</html>

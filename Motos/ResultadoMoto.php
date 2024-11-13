<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Resultado da pesquisa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
<link rel="icon" href="img/icon.png" type="image/x-icon">
<link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
<link rel="stylesheet" href="css/resultadocidade.css">
</head>
<body class="w3-light-grey">

<?php
// Inicializar variável para armazenar resultados da pesquisa
$resultados = array();
$cidadePesquisada = "";

// Processar a pesquisa
if (isset($_GET['search'])) {
    $cidadePesquisada = $_GET['search'];

    // Conexão com o banco de dados (substitua com suas próprias credenciais)
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "congressocristao";
    $conexao = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }

    // Consulta SQL para buscar dados com base no termo da cidade
    $sql = "SELECT * FROM criarevento WHERE cidade LIKE '%$cidadePesquisada%'";
    $result = $conexao->query($sql);

    // Armazenar resultados na variável
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $resultados[] = $row;
        }
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}

date_default_timezone_set('America/Sao_Paulo');

require_once('BancoDeDados.php');

// Consulta SQL para obter os dados dos eventos
$sqlEventos = "SELECT NomeEvento, Cidade, DataEvento, DataFinalEvento FROM criarevento";
$resultEventos = $conn->query($sqlEventos);

$eventos = array(); // Inicializa o array de eventos

if ($resultEventos->num_rows > 0) {
    while ($rowEvento = $resultEventos->fetch_assoc()) {
        $eventos[] = $rowEvento; // Adiciona cada evento ao array
    }
} else {
    echo "Nenhum evento encontrado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>

<!-- Navigation bar  -->
<div class="w3-bar w3-metro-dark-green w3-hide-small">
  <a href="congressocristao.php" class="w3-bar-item w3-green w3-button w3-round w3-margin-bottom"><i class="fa fa-arrow-circle-left w3-margin-right"></i>Voltar para o início</a>
  <!-- Barra de Pesquisa -->
  <div class="w3-bar-item w3-hide-small w3-round w3-right w3-hover-green">
      <form action="resultadocidade.php" method="GET">
        <div class="w3-input">
          <input id="searchInput" type="text" name="search" placeholder="Pesquisar Cidade" value="<?php echo htmlspecialchars($cidadePesquisada); ?>"> 
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
</div>
  
<!-- Header -->
<header class="w3-container w3-padding-48 ">
    <h1 class="w3-xxxlarge"><b>Resultado da sua pesquisa</b></h1>
</header>

<!-- Mostrar a cidade que o usuário pesquisou -->
<div class="w3-row-padding">
    <?php if (count($resultados) > 0): ?>
        <!---Resultado da pesquisa---->
    <h2>Resultados para a cidade de <?php echo htmlspecialchars($cidadePesquisada); ?>:</h2>
    <?php foreach ($resultados as $resultado): ?>
        <div class="w3-third w3-container w3-margin-bottom">
            <a href="evento.php">
            <?php
            // Buscar FotosLocal do banco de dados ou de onde estiver armazenado
            $FotosLocal = isset($resultado['FotosLocal']) ? $resultado['FotosLocal'] : 'Caminho_Padrao_Quando_Nao_Encontrar';

            // Supondo que $FotosLocal contém os caminhos das imagens separados por vírgula
            $fotosLocalArray = explode(",", $FotosLocal);
            foreach ($fotosLocalArray as $fotoLocal) :
            ?>
                <img class="mySlides w3-animate-opacity w3-round" src="<?php echo $fotoLocal; ?>" style="width:100%">
            <?php endforeach; ?>
            </a>
                <div class="w3-container w3-round w3-white">
                    <p><b><?php echo isset($resultado['NomeEvento']) ? $resultado['NomeEvento'] : 'Nome do Evento Indisponível'; ?></b></p>
                    <p><i><?php echo isset($resultado['Cidade']) ? $resultado['Cidade'] : 'Cidade Indisponível'; ?></i></p>
                    <?php
                    $dataInicio = isset($resultado['DataEvento']) ? date('d', strtotime($resultado['DataEvento'])) : 'Data Indisponível';
                    $dataFim = isset($resultado['DataFinalEvento']) ? date('d', strtotime($resultado['DataFinalEvento'])) : 'Data Final Indisponível';
                    $mes = isset($resultado['DataEvento']) ? strftime('%B', strtotime($resultado['DataEvento'])) : 'Mês Indisponível';
                    $ano = isset($resultado['DataEvento']) ? date('Y', strtotime($resultado['DataEvento'])) : 'Ano Indisponível';
                    ?>
                    <p>Esse evento acontecerá nos dias <?php echo $dataInicio; ?> a <?php echo $dataFim; ?> de <?php echo $mes; ?> de <?php echo $ano; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <!-- Nenhum resultado encontrado -->
        <p>Nenhum resultado encontrado para a cidade de <?php echo htmlspecialchars($cidadePesquisada); ?>.</p>
        <?php // Redirecionar para a página nenhumresultado.php
        header("Location: nenhumresultado.php");
        exit();
        ?>
    <?php endif; ?>
</div>
</div>

  <!-- Paginação -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-round w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-round w3-hover-black">»</a>
    </div>
  </div>

  <footer class="w3-container w3-theme w3-metro-dark-green w3-padding-16">
  <img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
  <p>Dúvidas: contato@congressocristao.com.br</p>
  <p>Login: Somente para Eventos</p>
  <p>Quer cadastrar seu Evento Cristão? evento@congressocristao.com.br</p>
  <p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
</footer>
  
 

<!-- End page content -->
</div>

<script src="js/resultadocidade.js"></script>


</body>
</html>
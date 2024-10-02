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
<link rel="stylesheet" type="text/css" href="pesquisarcidade.css">
</head>
<body class="w3-light-grey">

<!-- Navigation bar  -->
<div class="w3-bar w3-teal w3-hide-small">
  <a href="congressocristao.php" class="w3-bar-item w3-green w3-button w3-round w3-margin-bottom"><i class="fa fa-arrow-circle-left w3-margin-right"></i>Voltar para o início</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-round w3-right w3-hover-green" onclick="pesquisarEventos()">
        <div class="w3-input">
          <input id="searchInput" type="text" placeholder="Pesquisar Cidade"> <i class="fa fa-search" onclick="pesquisarEventos()"></i>
        </div>
    </a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-padding-48 ">
    <h1 class="w3-xxxlarge"><b>Resultado da sua pesquisa</b></h1>
  </header>

    <!-- Mostrar a cidade que o usuario pesquisou -->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href="aguasdelindoia.php">
        <img src="img/01.jpg" alt="Norway" style="width:100%" class="w3-round w3-hover-opacity">
      </a>
        <div class="w3-container w3-round w3-white">
          <p><b>Águas de Lindóia</b></p>
            <p>Esse evento acontecera nos dias 17, 18 e 19 de Novembro de 2023</p>
       </div>
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

  <!-- Footer -->
  <footer class="w3-container w3-theme-dark w3-teal w3-padding-16">
    <img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
    <p>Política de Cookies Termo de Uso</p>
	<p>Dúvidas: contato@congressocristao.com.br</p>
	<p>Login: Somente para Eventos</p>
	<p>Quer cadastrar seu Evento Cristão? evento@congressocristao.com.br</p>
	<p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
  </footer>
  
 

<!-- End page content -->
</div>

<script src="pesquisacidade.js"></script>

<script>


</script>

</body>
</html>

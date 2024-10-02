<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Águas de Lindóia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="aguasdelindoia.css">
</head>
<body>
<!-- Navbar -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxlarge w3-text-theme"></h1>
  <button class="w3-bar-item w3-button" onclick="w3_closeSidebar()">Fechar<i class="fa fa-remove"></i></button>
  <a href="congressocristao.php" class="w3-bar-item w3-button"><i class="fa fa-arrow-circle-left"></i> Voltar para pagina inicial</a>
  <a href="inscricaocasal.php" class="w3-bar-item w3-button">Inscrição</a>
  <a id="regulamento-btn" href="#" class="w3-bar-item w3-button">Regulamento</a>
</nav>
<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-round w3-right w3-hover-green" onclick="pesquisarEventos()">
        <div class="w3-input">
          <input id="searchInput" type="text" placeholder="Pesquisar Cidade"> <i class="fa fa-search" onclick="pesquisarEventos()"></i>
        </div>
    </a>

  <i onclick="w3_openSidebar()" class="fa fa-bars w3-xxxlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>Congresso Cristão</h4>
  <h1 class="w3-large w3-animate-bottom">Encontro de Casais Águas de Lindóia
Hotel Monte Real Resort
17 a 19 de Novembro/2023
</h1>
<h1 class="w3-large w3-animate-bottom">Realização:
Igreja Presbiteriana de Araraquara-SP</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-green w3-hover-light-grey w3-round" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">Inscreva-se</button>
      <h1 class="w3-medium w3-animate-bottom">Somente para Casais
R$ 1.500,00 o casal em 10x</h1>
    </div>
  </div>
</header>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4></h4>
        <h5>Inscrição</i></h5>
      </header>
      <div class="w3-padding">
        <i class="fa fa-warning"></i><p>Saiba que esse evento foi organizado para os casais que possuem interesse em participar e se o casal possuir filhos e desejar levar será cobrado um valor adicional</p>
        <p>Clique nesse botão se deseja participar
        <!-- Codigo a baixo serve para lincar com a pagina de inscrição de casal -->
        <a href="inscricaocasal.php" class="w3-bar-item w3-button">
 <button class="w3-btn w3-round w3-green w3-hover-light-grey" 
        onclick="document.getElementById('id03').style.display='block'" style="font-weight:900;">Quero Participar 
        <i class="fa fa-venus-mars"></i></button>
</a>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p></p>
      </footer>
    </div>
</div>


<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Dr. Roberto Aylmer</h3><br>
  <img src="img/DrRobertoAylmer.jpg" class="w3-round" style="width:50%">
  <p>Psiquiatra, Presbítero e
Conferencista, PhD, Médico,
Professor e Consultor em
lideranças de pessoas no
contexto complexo.</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Hotel</h3><br>
  <img src="img/HotelMonteReal.jpg" style="width:50%">
  <p>Hotel Monte Real Resort</p>
  <p>Chek-in 17/11, às 15:00 horas</p>
  <p>Chek-out 19/11, às 15:00 horas</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Regulamento</h3><br>
  <img src="img/regulamento.jpg" class="w3-round w3-center" style="width:50%">
  <p></p>
  <button class="w3-btn w3-xlarge w3-green w3-hover-light-grey w3-round" onclick="document.getElementById('id02').style.display='block'" style="font-weight:900;">Visualizar</button>
  </div>
  <p></p>
</div>
</div>
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id02').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4></h4>
        <h5>Regulamento</h5>
      </header>
      <div class="w3-padding">
        <p>Caros irmãos em Cristo!
A Igreja Presbiteriana de Araraquara estará promovendo o 2º Encontro de Casais a ser
realizado nos dias *17, 18 e 19 de Novembro de 2023 no Hotel Monte Real Resort em
Águas de Lindóia/SP*.
O preletor será o Dr. Roberto Aylmer, Psiquiatra, Presbítero e Conferencista, PhD,
Médico, Professor e Consultor em lideranças de pessoas no contexto complexo.
*A inscrição é somente para CASAIS, não sendo permitida a
participação e a hospedagem de crianças independentemente da idade
e qualquer outra pessoa, além do casal*.
Investimento de R$ 1.580,22 por casal, podendo ser parcelado conforme
disponibilidade de parcelas no link. No pix em única parcela R$ 1.522,70 o casal.
*Quanto menos parcela, menor o valor do Investimento*.
*No Boleto no valor de R$ 1.503,30 em única parcela*.
O Encontro oferece uma programação leve, num ambiente de muita alegria e amizade,
procurando através do convívio e das palestras proporcionar ao casal a oportunidade
de avaliar seu casamento à luz da vontade de Deus.
- *O valor pago dá direito ao uso de toda a infraestrutura do Hotel, bem como a todas
as refeições nele servidas, a começar do jantar na sexta-feira, dia 17/11/2023*;
- Gastos pessoais como água, sucos ou refrigerantes nas refeições; telefonemas,
frigobar, lavanderia etc... são de responsabilidade exclusiva do casal.
*INCLUSO TODAS AS REFEIÇÕES E CAFÉ DA MANHÃ E UTILIZAÇÃO DE TODAS AS
DEPENDÊNCIAS DO HOTEL*.
Clica no link abaixo ou no folder anexo, devendo preencher os dados e efetivar o
pagamento por cartão de crédito, boleto ou Pix.
Aproveitem e façam as suas inscrições que são vagas limitadas!
*Dúvidas, entre em contato com a Secretária da Igreja Helda pelo 16 997214886*.
*Um investimento que vale a pena*!</p>
      </div>
    </div>
</div>

<h2 class="w3-center">Fotos do local</h2>
<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides w3-animate-opacity w3-round" src="img/01.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/02.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/03.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/04.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/05.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/06.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/07.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/08.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/09.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity w3-round" src="img/10.jpg" style="width:100%">

<a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
<a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>


  
<hr>
<h2 class="w3-center">Quem Somos</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Comunidade Cristã de Barretos</button>
<div id="Demo1" class="w3-hide">
  <div class="w3-container">
    <p>A Comunidade Cristã de Barretos nasceu fruto de uma igreja já existente nesta cidade desde 1987, formada por um grupo de jovens que decidiram buscar ao Senhor por causa de um desejo de ver esta cidade transformada. Em outubro de 1995, a igreja de Barretos passou a ser coberta pela igreja Comunidade Cristã Vida de São Luiz de Montes Belos. Após alguns anos e mudanças passou a ser chamada Comunidade Cristã de Barretos.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Seven Sete Pay Code</button>
<div id="Demo2" class="w3-hide">
  <div class="w3-container">
    <p> teste da seven sete pay code texto para visualaizar o resultado </p> 
  </div>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Dr. Roberto Aylmer</button>
<div id="Demo3" class="w3-hide">
  <div class="w3-container">
    <p> Nossa metodologia hoje é definida por um modelo com forte embasamento científico, trazendo, para a prática diária, conhecimentos de ponta, mas de uma forma que o nosso cliente consiga absorver. É nosso dever e nosso compromisso fazer valer o maior custo que cada um tem: o tempo. </p>
  </div>
</div>


<hr>
<h2 class="w3-center">Endereço dos Locais</h2>
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Endereço do Hotel Monte Real')">Endereço do Hotel Monte Real</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Endereço da Igreja Presbiteriana')">Endereço da Igreja Presbiteriana </button>
</div>

<div id="Endereço do Hotel Monte Real" class="w3-container city w3-animate-opacity">
  <p>R. São Paulo, 622 - Centro, Águas de Lindóia - SP</p>
  <p>CEP: 13940-000</p>
  <a href="https://www.google.com/maps/place/R.+São+Paulo,+622,+Águas+de+Lindóia+-+SP,+13940-000/@-22.4715815,-46.6278128,17z/data=!3m1!4b1!4m6!3m5!1s0x94c911ac32cbe443:0x65b47c5fea41cb70!8m2!3d-22.4715815!4d-46.6278128!16s%2Fg%2F11ckqry27x?entry=ttu">
    Visualizar no Google Maps</a>
</div>

<div id="Endereço da Igreja Presbiteriana" class="w3-container city w3-animate-opacity">
  <p>R. Padre Duarte, 1664 - Araraquara - SP.</p> 
  <p>CEP: 14801-310</p>
  <a href="https://www.google.com/maps/@-21.7917633,-48.177638,3a,90y,237.36h,87.44t/data=!3m6!1e1!3m4!1sN0ed1-NIHI0MIRqgI24ZFg!2e0!7i16384!8i8192?entry=ttu">
    Visualizar no Google Maps</a>
  </div>
</div>

<footer class="w3-container w3-teal w3-padding-16">
  <a href="#myHeader" class="w3-button w3-round w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar ao topo</a>
  <img src="img/setesevenwhite.jpg" class="w3-right" style="width:8%">
  <p>Política de Cookies Termo de Uso</p>
  <p>Login: Somente para Eventos</p>
  <p>Meio de pagamento integrado com a SeteSeven Pay Code </p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">

  <script src="aguasdelindoia.js"></script>


</body>
</html>

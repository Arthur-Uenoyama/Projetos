// Função para abrir a barra lateral
function w3_openSidebar() {
  var x = document.getElementById("mySidebar");
  x.style.width = "250px";
  x.style.display = "block";
}

// Função para exibir o regulamento
function openRegulamento() {
  document.getElementById('id02').style.display = 'block';
}

// Adiciona um evento de clique ao botão de regulamento no navbar
document.getElementById('regulamento-btn').addEventListener('click', openRegulamento);

// Função para fechar a barra lateral
function w3_closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}


var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);


// Função para tratar a pesquisa com redirecionamento
function pesquisarEventos() {
  // Obter o valor digitado pelo usuário na caixa de texto
  var cidade = document.getElementById("searchInput").value;

  // Remover os espaços em branco do início e fim do valor da cidade
  cidade = cidade.trim();

  // Substituir os espaços em branco no meio do valor da cidade por "+" para utilizar na URL
  cidade = cidade.replace(/\s+/g, '+');

  // Verificar se a cidade não está vazia
  if (cidade !== "") {
    // Redirecionar para a página com a cidade pesquisada
    window.location.href = "aguasdelindoia.php?cidade=" + cidade;
  }
}

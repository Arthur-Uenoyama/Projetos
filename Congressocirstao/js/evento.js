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




document.addEventListener('DOMContentLoaded', function () {
  // Verifica se o modal está aberto antes de exibir o nome do evento
  function exibirNomeEvento() {
      var modal = document.getElementById('id01');
      if (modal.style.display !== 'block') {
          // O modal não está aberto, então exibe o nome do evento
          var nomeEvento = document.getElementById('nomeEvento').innerText;
          alert(nomeEvento); // Substitua isso pelo seu código para exibir o nome do evento
      }
  }

  // Adicione essa função ao seu botão ou evento desejado
  document.getElementById('seuBotao').addEventListener('click', exibirNomeEvento);
});

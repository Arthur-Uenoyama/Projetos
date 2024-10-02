
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-teal";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-teal", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

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
    window.location.href = "pesquisacidade.php?cidade=" + cidade;
  }
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
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
    window.location.href = "aguasdelindoia.php?cidade=" + cidade;
  }
}
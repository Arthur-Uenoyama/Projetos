function redirecionarProximaPagina() {
  window.location.href = "pacotecasal.php"; // Redireciona para a próxima página
}

function redirecionarVoltarPagina() {
  window.location.href = "aguasdelindoia.php"; // Redireciona para a voltar página
}

function incrementarValor() {
  var valorAtual = localStorage.getItem("valorTotal");
  var novoValorTotal = (valorAtual ? parseFloat(valorAtual) : 0) + 20;
  localStorage.setItem("valorTotal", novoValorTotal);
}

function showChildForm() {
      var childForm = document.getElementById("child-form");
      childForm.classList.remove("hidden");
    }
    
    function hideChildForm() {
      var childForm = document.getElementById("child-form");
      childForm.classList.add("hidden");
    }
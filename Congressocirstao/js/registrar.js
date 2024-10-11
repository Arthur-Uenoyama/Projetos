function togglePasswordVisibility(inputId) {
      var input = document.getElementById(inputId);
      if (input.type === "password") {
        input.type = "text";
      } else {
        input.type = "password";
      }
    }

    function validarFormulario() {
      var nomeInput = document.getElementById("nomeInput");
      var cnpjInput = document.getElementById("cnpjInput");
      var emailInput = document.getElementById("emailInput");
      var senhaInput = document.getElementById("senhaInput");
      var confirmarSenhaInput = document.getElementById("confirmarSenhaInput");

      if (nomeInput.value.trim() === "") {
        alert("Por favor, preencha o campo Nome da Igreja.");
        return false;
      }

      if (cnpjInput.value.trim() === "") {
        alert("Por favor, preencha o campo CNPJ.");
        return false;
      }

      if (emailInput.value.trim() === "") {
        alert("Por favor, preencha o campo E-mail.");
        return false;
      }

      if (senhaInput.value.trim() === "") {
        alert("Por favor, preencha o campo Senha.");
        return false;
      }

      if (confirmarSenhaInput.value.trim() === "") {
        alert("Por favor, preencha o campo Confirmar Senha.");
        return false;
      }

      if (senhaInput.value !== confirmarSenhaInput.value) {
        alert("As senhas não correspondem. Por favor, verifique.");
        return false;
      }

      return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cnpj = preg_replace('/[^0-9]/', '', $_POST['cnpj']);
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); // Hash da senha

    // Conectar ao banco de dados (substitua 'seu_host', 'seu_usuario', 'sua_senha' e 'seu_banco_de_dados')
    $conn = mysqli_connect('seu_host', 'seu_usuario', 'sua_senha', 'seu_banco_de_dados');

    // Verificar se a conexão foi bem-sucedida
    if (!$conn) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Inserir dados na tabela de usuários
    $sql = "INSERT INTO usuarios (cnpj, senha) VALUES ('$cnpj', '$senha')";
    if (mysqli_query($conn, $sql)) {
        echo "Registro realizado com sucesso!";
    } else {
        echo "Erro ao registrar o usuário: " . mysqli_error($conn);
    }

    // Fechar conexão
    mysqli_close($conn);
}

async function validarCNPJ(cnpj) {
    const apiKey = 'YOUR_RECEITAWS_API_KEY';
    const url = `https://www.receitaws.com.br/v1/cnpj/${cnpj}?apikey=${apiKey}`;

    try {
      const response = await fetch(url);
      const data = await response.json();

      if (data.status === 'OK') {
        // CNPJ is valid and active, proceed with form submission
        return true;
      } else {
        // CNPJ is invalid or not active, show an error message
        alert('CNPJ inválido ou inativo. Por favor, verifique o CNPJ digitado.');
        return false;
      }
    } catch (error) {
      // Error occurred while validating CNPJ, show an error message
      alert('Erro ao validar CNPJ. Por favor, tente novamente mais tarde.');
      return false;
    }
  }

  async function validarFormulario() {
    // ... (existing form validation code)

    // Check CNPJ validity before form submission
    var cnpjInput = document.getElementById('cnpjInput');
    var cnpj = cnpjInput.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters

    if (cnpj.length !== 14) {
      alert('CNPJ inválido. Por favor, digite apenas os 14 dígitos do CNPJ.');
      return false;
    }

    // Validate CNPJ using the ReceitaWS API
    return await validarCNPJ(cnpj);
  }
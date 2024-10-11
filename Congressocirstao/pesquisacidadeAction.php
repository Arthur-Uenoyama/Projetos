<?php
// Verifique se o formulário de pesquisa foi enviado
if (isset($_POST['submit'])) {
    // Conecte-se ao banco de dados (substitua os valores pelos seus próprios)
    $host = 'seu_host';
    $usuario = 'seu_usuario';
    $senha = 'sua_senha';
    $banco_de_dados = 'seu_banco_de_dados';

    $con = new mysqli($host, $usuario, $senha, $banco_de_dados);

    if ($con->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $con->connect_error);
    }

    // Obtenha o termo de pesquisa do formulário
    $termo_pesquisa = $_POST['termo_pesquisa'];

    // Consulta SQL para pesquisar cidades no banco de dados
    $sql = "SELECT nome_da_cidade FROM cidades WHERE nome_da_cidade LIKE '%$termo_pesquisa%'";

    $resultado = $con->query($sql);

    if ($resultado->num_rows > 0) {
        // Exiba os resultados
        echo '<h2>Resultados da pesquisa:</h2>';
        while ($row = $resultado->fetch_assoc()) {
            echo $row['nome_da_cidade'] . '<br>';
        }
    } else {
        echo 'Nenhum resultado encontrado.';
    }

    // Feche a conexão com o banco de dados
    $con->close();
}
?>
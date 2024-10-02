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
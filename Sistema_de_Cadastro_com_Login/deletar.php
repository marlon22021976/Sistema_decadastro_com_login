

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
    include("conexaoBD.php");

    $excluir = $_POST['excluir'];

    // Preparar a consulta de exclusão
    $sql = "DELETE FROM funcionario WHERE cpf = '$excluir'";

    // Executar a consulta
    if (mysqli_query($conexao, $sql)) {
        // Verificar se algum registro foi afetado
        if (mysqli_affected_rows($conexao) > 0) {
            echo "<div class='alert alert-success'>Cadastro excluído com sucesso.</div>";
        } else {
            echo "<div class='alert alert-danger'>Cadastro não encontrado.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Não foi realizada a operação. Erro: " . mysqli_error($conexao) . "</div>";
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
?>

<!-- Botão para voltar à página anterior -->
<div class="botao-fixo">
    <button onclick="window.history.back()">Voltar</button>
</div>

</body>
</html>

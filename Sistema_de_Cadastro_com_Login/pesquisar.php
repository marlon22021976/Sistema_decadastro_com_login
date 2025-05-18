

<?php
include("conexaoBD.php");

$pesquisar = $_POST['pesquisar'] ?? '';

$resultado = "SELECT * FROM funcionario WHERE nome LIKE '%$pesquisar%' LIMIT 5";
$resultado_funcionario = mysqli_query($conexao, $resultado);

// Verifica se houve resultados
if (mysqli_num_rows($resultado_funcionario) > 0) {
    while ($rows_funcionario = mysqli_fetch_array($resultado_funcionario)) {
        echo "Nome: " . $rows_funcionario['nome'] . "<br>";
        echo "CPF: " . $rows_funcionario['cpf'] . "<br>";
        echo "Endereço: " . $rows_funcionario['endereco'] . "<br>";
        echo "Cidade: " . $rows_funcionario['cidade'] . "<br>";
        echo "Estado: " . $rows_funcionario['estado'] . "<br>";
        echo "Formação: " . $rows_funcionario['formacao'] . "<br>";
        echo "Nivel Escolar: " . $rows_funcionario['nivelEscolar'] . "<br>";
        echo "<br>";
    }
} else {
    // Mensagem se nenhum resultado for encontrado
    echo "<p style='color: red; font-weight: bold;'>A procura não foi encontrada.</p>";
}
?>

<!-- Botão para voltar à página anterior -->
<button onclick="window.history.back()">Voltar</button>






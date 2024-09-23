<?php
// Conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "aula_php");

if (!$conexao) {
    die("Erro de conexão com o Banco de Dados");
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $email = $_POST["email"];

    // Verifica se pelo menos um critério foi preenchido
    if (empty($nome) && empty($matricula) && empty($email)) {
        echo "Preencha pelo menos um critério para exclusão.";
        exit;
    }

    // Monta a query DELETE com base nos critérios preenchidos
    $sql = "DELETE FROM alunos WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND nome = '" . mysqli_real_escape_string($conexao, $nome) . "'";
    }
    if (!empty($matricula)) {
        $sql .= " AND matricula = '" . mysqli_real_escape_string($conexao, $matricula) . "'";
    }
    if (!empty($email)) {
        $sql .= " AND email = '" . mysqli_real_escape_string($conexao, $email) . "'";
    }

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Nenhum registro encontrado para exclusão.";
    }
}

mysqli_close($conexao);
?>

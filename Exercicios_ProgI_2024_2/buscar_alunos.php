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

    // Consulta SQL com base nos critérios enviados
    $sql = "SELECT * FROM alunos WHERE 1=1";

    // Condicionalmente adiciona filtros
    if (!empty($nome)) {
        $sql .= " AND nome LIKE '%" . mysqli_real_escape_string($conexao, $nome) . "%'";
    }
    if (!empty($matricula)) {
        $sql .= " AND matricula = '" . mysqli_real_escape_string($conexao, $matricula) . "'";
    }
    if (!empty($email)) {
        $sql .= " AND email = '" . mysqli_real_escape_string($conexao, $email) . "'";
    }

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>Matrícula</th><th>Curso</th><th>E-mail</th><th>Telefone</th><th>Endereço</th><th>CEP</th><th>Cidade</th><th>UF</th><th>Curso para Horas</th><th>Carga Horária</th></tr>";
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>{$row['nome']}</td>
                    <td>{$row['matricula']}</td>
                    <td>{$row['curso']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefone']}</td>
                    <td>{$row['endereco']}</td>
                    <td>{$row['cep']}</td>
                    <td>{$row['cidade']}</td>
                    <td>{$row['uf']}</td>
                    <td>{$row['curso_horas']}</td>
                    <td>{$row['carga_horaria']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum aluno encontrado.";
    }
}
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Final do Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cálculo da Média Final do Aluno</h1>

    <!-- Formulário HTML -->
    <form action="exercicio8.php" method="post">
        <label for="nota1">Digite a nota A1:</label>
        <input type="number" step="0.01" id="nota1" name="nota1" required><br><br>

        <label for="nota2">Digite a nota A2:</label>
        <input type="number" step="0.01" id="nota2" name="nota2" required><br><br>

        <label for="nota3">Digite a nota A3:</label>
        <input type="number" step="0.01" id="nota3" name="nota3" required><br><br>

        <button type="submit">Calcular Média</button>
    </form>

    <?php
    // Processa as notas enviadas via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];

        // Calcula a média conforme o sistema de notas do SGA
        $media = (($nota1 * 2) + ($nota2 * 2) + ($nota3 * 1)) / 5;

        echo "<p>Média Final: $media</p>";

        // Verifica a situação do aluno
        if ($media >= 7) {
            echo "<p>Situação: Aprovado</p>";
        } else {
            echo "<p>Situação: Reprovado</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

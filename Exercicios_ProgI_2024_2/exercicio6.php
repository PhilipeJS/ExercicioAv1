<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exibir Valores em Ordem Crescente</h1>

    <!-- Formulário HTML -->
    <form action="exercicio6.php" method="post">
        <label for="numA">Digite o primeiro número (A):</label>
        <input type="number" id="numA" name="numA" required><br><br>

        <label for="numB">Digite o segundo número (B):</label>
        <input type="number" id="numB" name="numB" required><br><br>

        <button type="submit">Exibir em Ordem Crescente</button>
    </form>

    <?php
    // Processa os números enviados via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numA = $_POST["numA"];
        $numB = $_POST["numB"];

        // Exibe os números em ordem crescente
        if ($numA < $numB) {
            echo "<p>Ordem crescente: $numA, $numB</p>";
        } elseif ($numA > $numB) {
            echo "<p>Ordem crescente: $numB, $numA</p>";
        } else {
            echo "<p>Os números são iguais: $numA e $numB</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

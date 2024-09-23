<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação de Valores A e B</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Comparação de Valores A e B</h1>

    <!-- Formulário HTML -->
    <form action="exercicio7.php" method="post">
        <label for="valorA">Digite o valor de A:</label>
        <input type="number" id="valorA" name="valorA" required><br><br>

        <label for="valorB">Digite o valor de B:</label>
        <input type="number" id="valorB" name="valorB" required><br><br>

        <button type="submit">Comparar</button>
    </form>

    <?php
    // Processa os valores enviados via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        // Verifica se A é maior ou menor que B
        if ($valorA > $valorB) {
            echo "<p>A maior que B</p>";
        } elseif ($valorA < $valorB) {
            echo "<p>A menor que B</p>";
        } else {
            echo "<p>A e B são iguais</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

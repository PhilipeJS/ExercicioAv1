<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Par ou Ímpar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Verificação de Número: Par ou Ímpar</h1>

    <!-- Formulário HTML -->
    <form action="exercicio5.php" method="post">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    // Processa o número enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        // Verifica se o número é par ou ímpar
        if ($numero % 2 == 0) {
            echo "<p>$numero é Par</p>";
        } else {
            echo "<p>$numero é Ímpar</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

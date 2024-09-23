<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Verificação de Número: Positivo, Negativo ou Zero</h1>

    <!-- Formulário HTML -->
    <form action="exercicio1.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    // Processa o número enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o valor digitado no formulário
        $numero = $_POST["numero"];

        // Verifica se o número é positivo, negativo ou zero
        if ($numero > 0) {
            echo "<p>Valor Positivo</p>";
        } elseif ($numero < 0) {
            echo "<p>Valor Negativo</p>";
        } else {
            echo "<p>Igual a Zero</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Fatorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cálculo do Fatorial</h1>

    <!-- Formulário HTML -->
    <form action="exercicio3.php" method="post">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>

    <?php
    // Função recursiva para cálculo do fatorial
    function fatorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * fatorial($n - 1);
        }
    }

    // Processa o número enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero >= 0) {
            $resultado = fatorial($numero);
            echo "<p>O fatorial de $numero é $resultado.</p>";
        } else {
            echo "<p>Insira um número inteiro não negativo.</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

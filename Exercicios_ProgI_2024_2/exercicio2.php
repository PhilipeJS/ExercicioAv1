<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabuada de um Número</h1>

    <!-- Formulário HTML -->
    <form action="exercicio2.php" method="post">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular Tabuada</button>
    </form>

    <?php
    // Processa o número enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe o valor digitado no formulário
        $numero = $_POST["numero"];

        echo "<h2>Tabuada do número $numero:</h2>";
        echo "<ul>";
        
        // Calcula e exibe a tabuada de 0 a 10
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }

        echo "</ul>";
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

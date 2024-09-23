<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora</h1>

    <!-- Formulário HTML -->
    <form action="exercicio4.php" method="post">
        <label for="num1">Digite o primeiro número:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Digite o segundo número:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="operacao">Escolha a operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    // Processa os números e a operação enviada via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacao = $_POST["operacao"];
        $resultado = 0;

        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                echo "<p>Resultado da Soma: $num1 + $num2 = $resultado</p>";
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                echo "<p>Resultado da Subtração: $num1 - $num2 = $resultado</p>";
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                echo "<p>Resultado da Multiplicação: $num1 * $num2 = $resultado</p>";
                break;
            case "divisao":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "<p>Resultado da Divisão: $num1 / $num2 = $resultado</p>";
                } else {
                    echo "<p>Divisão por zero não é permitida!</p>";
                }
                break;
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

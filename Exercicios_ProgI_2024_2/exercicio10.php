<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificação do Mês</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Identificação do Mês pelo Número</h1>

    <!-- Formulário HTML -->
    <form action="exercicio10.php" method="post">
        <label for="numeroMes">Digite um número entre 1 e 12:</label>
        <input type="number" id="numeroMes" name="numeroMes" min="1" max="12" required><br><br>

        <button type="submit">Identificar Mês</button>
    </form>

    <?php
    // Processa o número enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroMes = $_POST["numeroMes"];

        // Usa switch para identificar o mês
        switch ($numeroMes) {
            case 1: echo "<p>Janeiro</p>"; break;
            case 2: echo "<p>Fevereiro</p>"; break;
            case 3: echo "<p>Março</p>"; break;
            case 4: echo "<p>Abril</p>"; break;
            case 5: echo "<p>Maio</p>"; break;
            case 6: echo "<p>Junho</p>"; break;
            case 7: echo "<p>Julho</p>"; break;
            case 8: echo "<p>Agosto</p>"; break;
            case 9: echo "<p>Setembro</p>"; break;
            case 10: echo "<p>Outubro</p>"; break;
            case 11: echo "<p>Novembro</p>"; break;
            case 12: echo "<p>Dezembro</p>"; break;
            default: echo "<p>Não existe mês com esse número.</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

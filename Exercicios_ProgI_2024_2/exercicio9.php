<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Maioridade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Verificação de Maioridade</h1>

    <!-- Formulário HTML -->
    <form action="exercicio9.php" method="post">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <button type="submit">Verificar Maioridade</button>
    </form>

    <?php
    // Processa os dados enviados via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        // Verifica se o usuário é maior de idade
        if ($idade >= 18) {
            echo "<p>$nome é maior de 18 e tem $idade anos.</p>";
        } else {
            echo "<p>$nome não é maior de 18 e tem $idade anos.</p>";
        }
    }
    ?>

    <!-- Botão para voltar à página inicial -->
    <form action="index.html" method="get">
        <button type="submit">Voltar à Página Inicial</button>
    </form>
</body>
</html>

<?php
// Função para limpar dados de entrada
function limparEntrada($dado) {
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}




// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializar variáveis e mensagens de erro
    $nome = $matricula = $curso = $email = $telefone = $endereco = $cep = $cidade = $uf = $curso_horas = $carga_horaria= "";
    $erros = [];

    if (empty($_POST["nome"])) {
        $erros[] = "O nome do aluno é obrigatório.";
    } else {
        $nome = limparEntrada($_POST["nome"]);
        if (!preg_match("/^[a-zA-Z\s]+$/", $nome)) {
            $erros[] = "O nome deve conter apenas letras e espaços.";
        }
    }




    // Validar Matrícula
    if (empty($_POST["matricula"])) {
        $erros[] = "A matrícula é obrigatória.";
    } else {
        $matricula = limparEntrada($_POST["matricula"]);
        // Adicione uma verificação de formato se necessário
    }




    // Validar Curso
    if (empty($_POST["curso"])) {
        $erros[] = "O curso é obrigatório.";
    } else {
        $curso = limparEntrada($_POST["curso"]);
        // Verifique se o curso está entre as opções válidas
        $cursosValidos = ["ADM", "ADS", "Pedagogia"];
        if (!in_array($curso, $cursosValidos)) {
            $erros[] = "Curso inválido.";
        }
    }




    // Validar Email
    if (empty($_POST["email"])) {
        $erros[] = "O email é obrigatório.";
    } else {
        $email = limparEntrada($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido.";
        }
    }




    // Validar Telefone
    if (empty($_POST["telefone"])) {
        $erros[] = "O telefone é obrigatório.";
    } else {
        $telefone = limparEntrada($_POST["telefone"]);
        // Adicione uma verificação de formato se necessário
    }




    // Validar Endereço
    if (empty($_POST["endereco"])) {
        $erros[] = "O endereço é obrigatório.";
    } else {
        $endereco = limparEntrada($_POST["endereco"]);
    }




    // Validar CEP
    if (empty($_POST["cep"])) {
        $erros[] = "O CEP é obrigatório.";
    } else {
        $cep = limparEntrada($_POST["cep"]);
        // Adicione uma verificação de formato se necessário
    }




    // Validar Cidade
    if (empty($_POST["cidade"])) {
        $erros[] = "A cidade é obrigatória.";
    } else {
        $cidade = limparEntrada($_POST["cidade"]);
    }




    // Validar UF
    if (empty($_POST["uf"])) {
        $erros[] = "A UF é obrigatória.";
    } else {
        $uf = limparEntrada($_POST["uf"]);
        // Verifique se a UF é válida
        if (!preg_match("/^[A-Z]{2}$/", $uf)) {
            $erros[] = "UF inválida.";
        }
    }

    if (empty($_POST["curso_horas"])) {
        $erros[] = "O curso a ser anexado as horas é obrigatório.";
    } else {
        $curso_horas = limparEntrada($_POST["curso_horas"]);
        if (!preg_match("/^[A-Z]{2}$/", $uf)) {
            $erros[] = "Curso inválida.";
        }
    }

    if (empty($_POST["carga_horaria"])) {
        $erros[] = "A carga horária é obrigatória.";
    } else {
        $carga_horaria = limparEntrada($_POST["carga_horaria"]);
        
        // Valida se é um número inteiro entre 1 e 80
        $options = array(
            "options" => array(
                "min_range" => 1,
                "max_range" => 80
            )
        );
        
        if (!filter_var($carga_horaria, FILTER_VALIDATE_INT, $options)) {
            $erros[] = "A carga horária deve ser um número inteiro entre 1 e 80.";
        }
    }
    

    // Exibir mensagens de erro ou dados validados
    if (empty($erros)) {
        echo "Formulário enviado com sucesso!";
        // Processar os dados, como salvar no banco de dados
    } else {
        foreach ($erros as $erro) {
            echo "<p>$erro</p>";
        }
    }
}

$conexao = mysqli_connect("localhost", "root", "", "aula_php");


if (!$conexao) {
    die("Erro de conexão com o Banco de Dados");
}

$sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria) VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', ' $carga_horaria')";

$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
?>



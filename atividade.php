<?php
// 1. Definindo variáveis e constantes para a primeira tarefa
define("NOMECLIENTE", "Marcos de Melo");
$endereco = 'Rua das Violetas, 320';
$bairro = 'Jd. Callegari';
$estado = 'SP';
$cep = '13.181-659';
$idade = 18;
define("RG", "28290355-x");
$fone = '(19) 8888-9696';

// 2. Definindo variáveis e constantes para a segunda tarefa
$nomeAluno = "Maria Fernanda";
$enderecoAluno = "Rua Violeta, 3025";
$cidade = "Campinas";
$estadoAluno = "São Paulo";
$cepAluno = "13.536-459";
$telefoneAluno = "(19) 8182-9977";
$celular = "(19) 3854-3695";
define("RG_ALUNO", "28.569.569-X");
define("CPF", "123.653.659-98");
define("PIS", "8452368888");

// 3. Criando um vetor associativo para livros
$livro = [
    "Código" => 8282,
    "Livros" => "PHP - Páginas dinâmicas",
    "Autor" => "Marcos de Melo",
    "Páginas" => 360
];

// 4. Criando uma matriz associativa para livros
$matriz = [
    ["Código" => 8282, "Livro" => "PHP - Páginas dinâmicas", "Autor" => "Marcos de Melo", "Páginas" => 360],
    ["Código" => 8283, "Livro" => "JavaScript - A linguagem do navegador", "Autor" => "Marcos de Melo", "Páginas" => 400]
];

// 5. Declarando variáveis
$nomePessoa = "João Silva";
$idadePessoa = 30;
$salario = 2500.00;

// 6. Algoritmo para soma e condição
$num1 = 15;
$num2 = 7;
$soma = $num1 + $num2;
if ($soma > 20) {
    $soma += 8;
} else {
    $soma -= 5;
}

// 7. Verificação de divisibilidade
$num = 30;
$divisibilidade = "";
if ($num % 10 == 0) {
    $divisibilidade = "$num é divisível por 10.";
} elseif ($num % 5 == 0) {
    $divisibilidade = "$num é divisível por 5.";
} elseif ($num % 2 == 0) {
    $divisibilidade = "$num é divisível por 2.";
} else {
    $divisibilidade = "$num não é divisível por 10, 5 ou 2.";
}

// 8. Verificação de aceitação
$nome = "Ana";
$sexo = "F";
$idade = 22;
if ($sexo == "F" && $idade < 25) {
    $aceitacao = "$nome: ACEITA";
} else {
    $aceitacao = "$nome: NÃO ACEITA";
}

// 9. Impressão de números em ordem decrescente
$numA = 5;
$numB = 10;
$numC = 7;
$numeros = [$numA, $numB, $numC];
rsort($numeros);

// 10. Classificação de triângulos
$lado1 = 3;
$lado2 = 4;
$lado3 = 5;
if ($lado1 == $lado2 && $lado2 == $lado3) {
    $triangulo = "Triângulo Equilátero";
} elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
    $triangulo = "Triângulo Isósceles";
} else {
    $triangulo = "Triângulo Escaleno";
}

// 11. Data e hora atual
$dataHoraAtual = date("d/m/Y H:i:s");

// 12. Array de capitais da região sul
$estado = [
    "RS" => "Porto Alegre",
    "SC" => "Florianópolis",
    "PR" => "Curitiba"
];

// 13. Valores das variáveis após execução do programa
$a = 2; $b = 4; $c = 6; 
$x = --$c + $b; 
$y = $b++ + $a; 
$z = $a - $b--;

// 14. Array com informações sobre um curso
$curso = [
    "nome" => "PHP 5",
    "data" => "2024-06-23",
    "carga_horaria" => "40 horas",
    "local" => "Online"
];

// 15. Cálculo da área e perímetro do retângulo (com dados fictícios para demonstração)
$lado1 = 5;
$lado2 = 10;
$area = $lado1 * $lado2;
$perimetro = 2 * ($lado1 + $lado2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Atividade Completa em PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <h1>1. Informações do Contato</h1>
    <p>Nome completo: <?php echo NOMECLIENTE;?> </p>
    <p>Endereço: <?php echo $endereco;?> </p>
    <p><?php echo "$bairro - $estado - CEP: $cep";?> </p>
    <p>Telefone: <?php echo $fone;?></p>
    <h2>Documentos</h2>
    <p>Idade: <?php echo $idade;?> | RG: <?php echo RG;?></p>

    <h1>2. Informações do Aluno</h1>
    <p>Nome do Aluno: <?php echo $nomeAluno;?> </p>
    <p>Endereço: <?php echo $enderecoAluno;?> </p>
    <p>Cidade: <?php echo $cidade;?> </p>
    <p>Estado: <?php echo $estadoAluno;?> </p>
    <p>CEP: <?php echo $cepAluno;?> </p>
    <p>Telefone: <?php echo $telefoneAluno;?> </p>
    <p>Celular: <?php echo $celular;?> </p>
    <h2>Documentos</h2>
    <p>RG: <?php echo RG_ALUNO;?> </p>
    <p>CPF: <?php echo CPF;?> </p>
    <p>PIS: <?php echo PIS;?> </p>

    <h1>3. Vetor Associativo para Livros</h1>
    <?php foreach ($livro as $chave => $valor) {
        echo "$chave: $valor<br>";
    } ?>

    <h1>4. Matriz Associativa para Livros</h1>
    <?php foreach ($matriz as $livro) {
        foreach ($livro as $chave => $valor) {
            echo "$chave: $valor<br>";
        }
        echo "<br>";
    } ?>

    <h1>5. Variáveis Diversas</h1>
    <p>Nome: <?php echo $nomePessoa; ?></p>
    <p>Idade: <?php echo $idadePessoa; ?></p>
    <p>Salário: <?php echo $salario; ?></p>

    <h1>6. Algoritmo de Soma e Condição</h1>
    <p>Resultado: <?php echo $soma; ?></p>

    <h1>7. Verificação de Divisibilidade</h1>
    <p><?php echo $divisibilidade; ?></p>

    <h1>8. Verificação de Aceitação</h1>
    <p><?php echo $aceitacao; ?></p>

    <h1>9. Números em Ordem Decrescente</h1>
    <?php foreach ($numeros as $num) {
        echo "$num<br>";
    } ?>

    <h1>10. Classificação de Triângulos</h1>
    <p><?php echo $triangulo; ?></p>

    <h1>11. Data e Hora Atual</h1>
    <p><?php echo $dataHoraAtual; ?></p>

    <h1>12. Capitais da Região Sul</h1>
    <?php foreach ($estado as $sigla => $capital) {
        echo "$sigla: $capital<br>";
    } ?>

    <h1>13. Valores das Variáveis</h1>
    <p>a = <?php echo $a; ?>, b = <?php echo $b; ?>, c = <?php echo $c; ?>, x = <?php echo $x; ?>, y = <?php echo $y; ?>, z = <?php echo $z; ?></p>

    <h1>14. Informações do Curso</
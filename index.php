<?php
$perguntas = [
    "Qual é o maior órgão do corpo humano?",
    "Quantos ossos um adulto tem aproximadamente no corpo humano?",
    "Qual é o elemento químico com o símbolo 'Na'?",
    "Qual é a lei de Newton que afirma que um corpo em repouso tende a permanecer em repouso?",
    "Qual é a capital do Brasil?"
];

$alternativas = [
    ["Fígado", "Coração", "Pele", "Pulmão"],
    ["206", "210", "208", "205"],
    ["Sódio", "Nitrogênio", "Neônio", "Nióbio"],
    ["Lei da Gravitação Universal", "Lei da Inércia", "Lei da Ação e Reação", "Lei de Hooke"],
    ["Brasília", "Rio de Janeiro", "São Paulo", "Salvador"]
];

$respostas_certas = [2, 0, 0, 1, 0]; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz sobre Conhecimentos Gerais</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .pergunta {
            margin-bottom: 20px;
        }
        .alternativas label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Conhecimentos Gerais</h1>
    <?php

    for ($i = 0; $i < count($perguntas); $i++) {
        echo "<div class='pergunta'>";
        echo "<p><strong>" . $perguntas[$i] . "</strong></p>";
        echo "<div class='alternativas'>";

        foreach ($alternativas[$i] as $indice => $alternativa) {
            echo "<label><input type='radio' name='pergunta_$i' value='$indice'> $alternativa</label><br>";
        }

        echo "</div>";
        echo "</div>";
    }
    ?>
</body>
</html>

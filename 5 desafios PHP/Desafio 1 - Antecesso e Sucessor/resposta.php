<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta Desafio 1</title>
</head>
<body>
    <header>
        <h1>Processamento de Dados</h1>
    </header>
    <section>
        <?php 
            // Verifica se o número foi passado e é numérico

            /* isset(): Verifica se o parâmetro numero foi enviado.
            is_numeric(): Garante que o valor é numérico. */
            if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
                
                $numero = (float) $_GET["numero"]; // Usando float para aceitar decimais 
                
                $numero_arredondado = round($numero);  // Arredondando o número
                echo "<h1>Resultado Final</h1>";
                echo "O número escolhido foi <strong>$numero_arredondado</strong><br>";

                // Antecessor e sucessor
                echo "O seu antecessor é: " . round($numero - 1) . "<br>";
                echo "O seu sucessor é: " . round($numero + 1);
            } else {
                echo "<h1>Erro</h1><p>Por favor, forneça um número válido.</p>";
            }
        ?>
        <br>
        <button><a href="Desafio1.php">Voltar</a></button>
    </section>
</body>
</html>

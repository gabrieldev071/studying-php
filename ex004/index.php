<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da Maldição</title>
</head>
<body>
    <h1>Dados do Servidor PHP:</h1>
    <?php 
        const CANAL = "Curso em Vídeo \u{1F499}";

        echo "Eu adoro o " . CANAL;
        echo "<br>";

        echo "Estamos no ano de " . date('Y');

        $nom = "Rodrigo";
        $snom = "Nogueira";

        echo "<br>";
        echo "$nom\"Minotauro\"$snom";

        $curso = "PHP";
        $ano = date('Y');
        echo "<br>";
        echo <<< 'FRASE'
            Estou estudando 
                $curso em 
                    $ano
        FRASE;
        
    ?>
</body>
</html>
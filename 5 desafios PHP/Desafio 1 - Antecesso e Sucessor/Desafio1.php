<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 1</title>
</head>
<body>
    <header>
        <h1>Informe um número:</h1>
    </header>
    <section>
        <form action="resposta.php" method="get">
            <label for="numero">Número:</label>
            <input type="number" step="any" name="numero" id="numero">
            <input type="submit" value="Calcular">
        </form>
    </section>
</body>
</html>
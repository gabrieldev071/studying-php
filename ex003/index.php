<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <!-- Código pré-processado -->
    <?php 
        $num = 0x1A;
        echo "O valor da variável é $num";
        $v = "Gabriel";
        echo "<br>";
        echo "<br>";
        var_dump($v);

        $n = (integer)3e2; // 3 x 10(2)
  
        echo "O valor é $n";

        echo "<br>";
        echo "<br>";
        $numero = (float) "950";
        var_dump($numero);

        echo "<br>";
        echo "<br>";
        $casado = true;
        var_dump($casado);
        print "O valor para caso é $casado";

        echo "<br>";
        echo "<br>";
        echo "<br>";
        $vet = [6, 2.5, "Maria", 3, false];
        var_dump($vet);


        echo "<br>";
        echo "<br>";
        echo "<br>";
        class Pessoa {
            private string $nome;

        }

        $p = new Pessoa;
        var_dump($p)
    ?>

</body>
</html>
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
     <h1>PRECEDÊNCIA</h1>
     <br>
     <p>()</p>
     <p>**</p>
     <p>*, /, %</p>
     <p>+, -</p>
    <?php 

        $r = abs(-2000); //valor absoluto, sem o final
        print("A respota é $r");
        echo "<br>";

        //troca base n, (binária, hexadecimal, base 10)....

        $r1 = base_convert(254, 10, 8); 
        print("A respota é $r1");


        //arredondar para cima (ceil), chão(floor) ou arredondar(round)

        echo "<br>";
        $r2 = ceil(5.5); 
        print("A respota é $r2"); 

        /* hypot() */

        // intdiv() divisão inteira

        //min(), max() valor máximo

        echo "<br>";
        $r5 = max(5, 2, 100, 50); 
        print("A respota é $r5");

        /* Criar potência */

        echo "<br>";
        $r6 = pow(20, 2);
        print("A respota é $r6");

        /* Senno, cosseno e tangente sin(), cos() e tan() */

        echo "<br>";
        $r7 = pow(20, 2);
        print("A respota é $r5");

        /* Raiz quadrade de um número, sqrt(number); */

        echo "<br>";
        $r8 = sqrt(81);
        print("A respota é $r8");
    ?>
</body>
</html>
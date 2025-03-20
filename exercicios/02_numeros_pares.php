<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Pares</title>
</head>

<body>

    <form method="POST">
        <label for="num1">Insira o primeiro número:</label>
        <input type="number" name="num1" id="num1">
        <label for="num2">Insira o segundo número:</label>
        <input type="number" name="num2" id="num2">
        <br>
        <button type="submit">Exibir Pares</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = intval($_POST["num1"]);
        $num2 = intval($_POST["num2"]);

        if ($num1 > $num2) {
            list($num1, $num2) = array($num2, $num1); //garante que o $num1 seja maior do que o $num2. (no caso, acho q ele troca os valores se o num1 for maior q o outro)
        }

        echo "<br>";
        echo "<br>";
        echo "Apresentando os números pares entre $num1 e $num2";
        echo "<br>";
        echo "<br>";

        echo "<strong>Usando for:</strong><br>";
        for ($i = $num1; $i <= $num2; $i++) {
            if ($i % 2 == 0) {
                echo $i . ", ";
            }
        }

        echo "<br>";
        echo "<br><strong>Usando while:</strong><br>";
        $i = $num1;
        while ($i <= $num2) {
            if ($i % 2 == 0) {
                echo $i . ", ";
            }
            $i++;
        }


        echo "<br>";
        echo "<br><strong>Usando do-while:</strong><br>";
        $i = $num1;
        do {
            if ($i % 2 == 0) {
                echo $i . ", ";
            }
            $i++;
        } while ($i <= $num2);
    }

    ?>

    <br>
    <br>
    <button><a href="../index.php">Voltar</a></button>
</body>

</html>
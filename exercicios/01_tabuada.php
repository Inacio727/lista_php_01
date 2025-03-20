<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>

    <form method="POST">
        <input type="number" name="numTabuada" placeholder="Number">
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

    <?php
    //tabuada usando for, do e doWhile
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numTabuada = $_POST["numTabuada"];
        $p = 1;
        $c = 1;

        echo "<br>";
        echo "<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo $numTabuada . " x " . $i . " = " . $numTabuada * $i . "<br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        while ($p <= 10) {
            echo $numTabuada . " x " . $p . " = " . $numTabuada * $p . "<br>";
            $p++;
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        do {
            echo $numTabuada . " x " . $c . " = " . $numTabuada * $c . "<br>";
            $c++;
        } while ($c < 11);
    }


    ?>
    <br>
    <br>
    <button><a href="../index.php">Voltar</a></button>

</body>

</html>
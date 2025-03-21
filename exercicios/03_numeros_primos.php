<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">

        <label for="num1">Inserir número que talvez seja primo:</label>
        <input type="number" placeholder="Numero primo?" name="num1" value="num1">
    </form>

    <?php
    function ehPrimo($num1)
    {
        if ($num1 < 2) {
            echo "Números menores que 2 não são primos.";
            return false;
        }
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = ($_POST["num1"]);
    }


    ?>

    <br>
    <br>
    <button><a href="../index.php">Voltar</a></button>
</body>

</html>
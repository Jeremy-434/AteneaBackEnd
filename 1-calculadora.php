<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
    <style>
        input[type=number] {
            width: 50px;
        }
    </style>
</head>

<body>
    <h1>Calculadora</h1>
    <form action="1-calculadora.php" method="post">
        <input type="number" name="numero1" step="any" required>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="number" name="numero2" step="any" required>
        <input type="submit" value="Operar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        switch ($operacion) {
            case "suma":
                $resultado = $numero1 + $numero2;
                break;
            case "resta":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicacion":
                $resultado = $numero1 * $numero2;
                break;
            case "division":
                if ($numero2 == 0) {
                    echo "No se puede dividir por cero";
                    exit;
                }
                $resultado = $numero1 / $numero2;
                break;
        }

        echo "El resultado es: " . $resultado;
    }
    ?>
</body>

</html>
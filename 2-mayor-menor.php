<?php
$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];

    if ($edad < 18) {
        $resultado = "No es mayor de edad";
    } else {
        $resultado = "Es mayor de edad";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Mayor de edad</title>
</head>

<body>
    <h1>Mayor de edad</h1>
    <form method="post">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <input type="submit" value="Enviar">
    </form>
    <?php if ($resultado !== "") : ?>
        <p><?php echo htmlspecialchars($resultado); ?></p>
    <?php endif; ?>
</body>

</html>
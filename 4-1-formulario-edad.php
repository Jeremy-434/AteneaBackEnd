<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="4-1-formulario-edad.php" method="get">
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required> 
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php if (isset($_GET["fecha_nacimiento"])): ?>
        <?php
        $fecha_nacimiento = new DateTime($_GET["fecha_nacimiento"]);
        $fecha_actual = new DateTime();
        $diferencia = $fecha_actual->diff($fecha_nacimiento);
        $edad_anios = $diferencia->y;
        $edad_meses = $diferencia->m;
        $edad_dias = $diferencia->d;
        ?>
        <p>Su edad es: <?php echo $edad_anios; ?> años, <?php echo $edad_meses; ?> meses y <?php echo $edad_dias; ?> días</p>
        <?php if ($edad_anios < 18): ?>
            <p>Por tanto: No es mayor de edad</p>
        <?php else: ?>
            <p>Por tanto: Es mayor de edad</p>
        <?php endif; ?>
    <?php else: ?>
        <p>No se ha ingresado una fecha de nacimiento.</p>
    <?php endif; ?>
</body>
</html>
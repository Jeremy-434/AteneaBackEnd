<!DOCTYPE html>
<html>

<head>
    <title>Mostrar datos</title>
</head>

<body>
    <h1>Datos ingresados</h1>
    <?php
    if (
        isset($_GET["nombre"])
        && isset($_GET["apellido"])
        && isset($_GET["cedula"])
    ) : ?>
        <p>Nombre: <?php echo htmlspecialchars($_GET["nombre"]); ?></p>
        <p>Apellido: <?php echo htmlspecialchars($_GET["apellido"]); ?></p>
        <p>Cédula: <?php echo htmlspecialchars($_GET["cedula"]); ?></p>
    <?php else : ?>
        <p>No se han ingresado datos.</p>
    <?php endif; ?>
</body>

</html>
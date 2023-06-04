<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="3-2-mostrar-datos.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required> 
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required> 
        <br>
        <label for="cedula">Cédula:</label>
        <input type="text" name="cedula" id="cedula" required> 
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
include '6-conexion.php';

if (isset($_POST['submit'])) {
    $search_term = $_POST['search_term'];

    $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$search_term%' OR apellido LIKE '%$search_term%'";
    $result = $conn->query($sql);

    if ($result) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["nombre"] . " " . $row["apellido"] . "<br>";
        }
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<form method="post">
    <label for="search_term">Search for users:</label>
    <input type="text" id="search_term" name="search_term">
    <input type="submit" name="submit" value="Search">
</form>

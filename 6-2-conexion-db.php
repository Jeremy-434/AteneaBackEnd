<?php
include '6-conexion.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["nombre"] . " " . $row["apellido"] . "<br>";
    }
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

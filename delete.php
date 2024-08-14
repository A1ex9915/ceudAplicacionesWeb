<?php
$servername = "	sql110.infinityfree.com";
$username = "if0_37106801";
$password = "CErg432kike";
$dbname = "if0_37106801_crud";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curp = $_POST['curp'];

    $sql = "DELETE FROM empleado WHERE Curp='$curp'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado con éxito";
    } else {
        echo "Error eliminando registro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Empleado</title>
</head>
<body>
    <h1>Borrar Empleado</h1>
    <form method="post" action="">
        Curp: <input type="text" name="curp" required><br>
        <input type="submit" value="Borrar">
    </form>
</body>
</html>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Nombre de usuario:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php
    // Mostrar mensaje de error, si existe
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>

<?php
include_once("include/header.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar el nombre de usuario y la contraseña del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Consulta para verificar si el usuario y la contraseña coinciden
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        header("Location: index.php");
        exit();
    } else {
        // El usuario y la contraseña son incorrectos, mostrar un mensaje de error
        $error = "Nombre de usuario o contraseña incorrectos";
    }
}

// Cerrar la conexión
$conn->close();
?>

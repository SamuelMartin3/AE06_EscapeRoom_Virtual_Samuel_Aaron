<?php
session_start(); // Iniciar sesión

// Verificar si ambos retos se completaron
if (!isset($_SESSION['reto1_completado']) || $_SESSION['reto1_completado'] !== true || 
    !isset($_SESSION['reto2_completado']) || $_SESSION['reto2_completado'] !== true) {
    header("Location: reto1.php"); // Si no han completado ambos retos, redirigir a reto 1
    exit();
}

if (isset($_SESSION['mensaje'])) {
    echo "<p style='color: green;'>" . $_SESSION['mensaje'] . "</p>";
    unset($_SESSION['mensaje']); // Limpiar mensaje
}

// Limpiar las variables de sesión después de felicitaciones
unset($_SESSION['reto1_completado']);
unset($_SESSION['reto2_completado']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Felicidades!</title>
    <link rel="stylesheet" href="./css/stylereto.css">
</head>
<body>
    <div class="felicidades-container">
        <h1>🎉 ¡Felicidades! Has completado la mitad de los retos</h1>
        <p>Ahora puedes explorar el mapa y continuar la aventura.</p>
        <a href="./reto3.php">
            <button>🗺️ Ir al siguente reto</button>
        </a>
    </div>
</body>
</html>

    <?php
session_start(); // Iniciar sesión

// Verificar si completó el Reto 1, si no, redirigir a reto 1
if (!isset($_SESSION['reto1_completado']) || $_SESSION['reto1_completado'] !== true) {
    header("Location: reto1.php"); // Redirigir a reto 1 si no completó el reto 1
    exit();
}

if (isset($_SESSION['mensaje'])) {
    echo "<p style='color: red;'>" . $_SESSION['mensaje'] . "</p>";
    unset($_SESSION['mensaje']); // Limpiar mensaje de sesión
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2 - El Cofre de los Colores</title>
    <link rel="stylesheet" href="./css/stylereto.css">
</head>
<body class="body2">
    <div class="reto2-container">
        <h2>🏴‍☠️ Reto 2: El Cofre de los Colores</h2>
        <p>📜 "Encuentras un cofre con tres gemas: roja, azul y amarilla. Un mensaje dice:</p>
        <p><em>'Para abrir el cofre, elige la gema que, al mezclarla con azul, da como resultado verde.'</em></p>
        <form action="validaciones/val2.php" method="POST">
            <label>💎 Escribe el color correcto:</label>
            <input type="text" name="gema" required>
            <button type="submit">🔑 Abrir Cofre</button>
        </form>
    </div>
    <?php
// Mostrar el mensaje de error si está en la URL
if (isset($_GET['msg'])) {
    echo "<p class='error'>" . ($_GET['msg']) . "</p>";
}elseif(isset($_GET['error'])){  
        echo "<br>"; 
        echo " <p>No te pases de listo, calisto. </p>";
    }
?>
  
</body>
</html>
